<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-01-06
 * Time: 12:36
 */

namespace AmpHTML;

use AmpHTML\Traits\AmpLayoutAttrs;
use Doctrine\Common\Inflector\Inflector;
use gossi\codegen\generator\CodeFileGenerator;
use gossi\codegen\generator\CodeGenerator;
use gossi\codegen\model\AbstractPhpStruct;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpFunction;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;
use gossi\codegen\model\PhpProperty;
use gossi\codegen\model\PhpTrait;
use gossi\docblock\Docblock;
use gossi\docblock\tags\LinkTag;
use gossi\docblock\tags\ReturnTag;
use gossi\docblock\tags\SeeTag;
use gossi\docblock\tags\UnknownTag;
use Lullabot\AMP\Spec\AttrList;
use Lullabot\AMP\Spec\AttrSpec;
use Lullabot\AMP\Spec\TagSpec;
use Lullabot\AMP\Spec\ValidationRulesFactory;

class CodeGen {

    const TAGS_NAMESPACE = "Tags";
    const TRAITS_NAMESPACE = "Traits";
    const SCRIPT_TAGS_NAMESPACE = "ScriptTags";

    const AMP_CLASS_NAME = "Amp";

    static function tag_qname($name) {
        $className = self::create_class_name($name);
        return implode("\\", [__NAMESPACE__, self::TAGS_NAMESPACE, $className]);
    }

    static function script_tag_qname($name) {
        $className = self::create_class_name($name);
        return implode("\\", [__NAMESPACE__, self::SCRIPT_TAGS_NAMESPACE, $className]);
    }

    static function trait_qname($name) {
        $className = self::create_class_name($name);
        return implode("\\", [__NAMESPACE__, self::TRAITS_NAMESPACE, $className]);
    }

    static function override_php_keywords($name) {
        $overrides = [
            "default" => "dflt",
            "class" => "cls",
            "list" => "ls",
        ];
        if (isset($overrides[$name])) {
            $name = $overrides[$name];
        }
        return $name;
    }

    static function add_attr_method(AbstractPhpStruct $class, $attr_name) {
        $methodName = str_replace(":", "-", $attr_name);
        $methodName = Inflector::camelize($methodName);
        $methodName = self::override_php_keywords($methodName);

        $method = new PhpMethod($methodName);
        $doc = new Docblock();
        $returnTag = new ReturnTag();
        $returnTag->setType('$this');
        $doc->appendTag($returnTag);
        $method->setDocblock($doc);
        $param = new PhpParameter("value");
        $method->setParameters([$param]);
        $method->setBody('return $this->attr("' . $attr_name . '", $value);');
        return $class->setMethod($method);
    }

    static function create_class_name($name) {
        $name = ltrim($name, '$');
        $name = str_replace(".", "", $name);
        $name = Inflector::classify($name);
        return $name;
    }

    static function create_class_filename($namespace, $className) {
        $className = self::create_class_name($className);
        $srcFolder = dirname(__FILE__);
        return implode(DIRECTORY_SEPARATOR, [$srcFolder, $namespace, $className . ".php"]);

    }

    static function create_tag_class($qualifiedName, $tagName) {
        $class = new PhpClass($qualifiedName);
        $class->setParentClassName("\\" . AbstractTag::class);
        $attrProperty = new PhpProperty("tagName");
        $attrProperty->setValue($tagName);
        $attrProperty->setVisibility(PhpProperty::VISIBILITY_PROTECTED);
        $class->setProperty($attrProperty);
        return $class;
    }

    static public function write_file($filename, $code) {
        file_put_contents($filename, $code);
    }

    /**
     * @param PhpClass $class
     * @param $codeLines
     */
    static public function create_constructor_method(PhpClass $class, $codeLines) {
        $codeLines[] = 'parent::__construct($attrs);';
        $constructor = new PhpMethod("__construct");
        $parameter = new PhpParameter("attrs");
        $parameter->setType("array");
        $parameter->setExpression("[]");
        $constructor->addParameter($parameter);
        if (count($codeLines)) {
            $constructor->setBody(implode(PHP_EOL, $codeLines));
        }
        $class->setMethod($constructor);
    }

    static public function add_trait(PhpClass $class, $qualifiedName) {
        $trait = new PhpTrait($qualifiedName);
        $class->addTrait($trait);
    }

    static public function add_spec_url(PhpClass $class, $url) {
        $doc = $class->getDocblock();
        $linkTag = new LinkTag();
        $linkTag->setUrl($url);
        $doc->appendTag($linkTag);
    }

    /**
     * @param AttrList $attr_list
     * @return string
     */
    static public function generate_trait_class(AttrList $attr_list) {
        $name = strtolower($attr_list->name);
        $trait = new PhpTrait(self::trait_qname($name));
        foreach ($attr_list->attrs as $attr) {
            /* @var AttrSpec $attr */
            self::add_attr_method($trait, $attr->name);
        }

        $generator = new CodeFileGenerator();
        $doc = new Docblock();
        $tag = new UnknownTag("noinspection");
        $tag->setDescription("PhpUndefinedMethodInspection");
        $doc->appendTag($tag);
        $generator->getConfig()->setHeaderDocblock($doc);
        return $generator->generate($trait);
    }

    static public function create_attr_function_call($name, $val) {
        return '$this->attr("' . $name . '", "' . $val . '");';
    }

    /**
     * @param TagSpec $tag
     * @return mixed
     */
    static public function generate_script_tag_class(TagSpec $tag) {
        $class = self::create_tag_class(self::script_tag_qname($tag->spec_name), $tag->tag_name);

        $constructParams = [];
        foreach ($tag->attrs as $attr) {
            /* @var AttrSpec $attr */
            if ($attr->name == "src" && !is_null($attr->value_regex)) {
                $value = str_replace(["(", ")", "\\", "latest", "|"], "", $attr->value_regex);
                $constructParams[] = self::create_attr_function_call($attr->name, $value);
            } else {
                $constructParams[] = self::create_attr_function_call($attr->name, $attr->value);
            }
        }
        self::create_constructor_method($class, $constructParams);
        self::add_spec_url($class, $tag->spec_url);

        $doc = $class->getDocblock();
        $seeTag = new SeeTag();
        $seeTag->setReference($tag->spec_name);
        $doc->appendTag($seeTag);

        $generator = new CodeFileGenerator();
        return $generator->generate($class);
    }

    /**
     * @param TagSpec $tag
     * @return mixed
     */
    static public function generate_tag_class(TagSpec $tag) {
        $className = self::create_class_name($tag->tag_name);
        $class = self::create_tag_class(self::tag_qname($className), $tag->tag_name);

        foreach ($tag->attr_lists as $attr_list) {
            $traitName = self::create_class_name($attr_list);
            self::add_trait($class, self::trait_qname($traitName));
        }

        if (!is_null($tag->amp_layout)) {
            self::add_trait($class, "\\" . AmpLayoutAttrs::class);
        }

        $codeLines = [];
        foreach ($tag->attrs as $attr) {
            /* @var AttrSpec $attr */
            self::add_attr_method($class, $attr->name);
            if (!is_null($attr->value)) {
                $codeLines[] = self::create_attr_function_call($attr->name, $attr->value);
            }
        }
        foreach ($tag->also_requires_tag as $also_require_tag) {
            $also_require_classname = self::create_class_name($also_require_tag);
            $class->addUseStatement(self::script_tag_qname($also_require_classname));
            $codeLines[] = '$this->requireScript(' . $also_require_classname . '::class);';
        }

        self::create_constructor_method($class, $codeLines);
        self::add_spec_url($class, $tag->spec_url);

        $generator = new CodeFileGenerator();
        return $generator->generate($class);
    }

    /**
     * @param array $tags
     * @return string
     */
    static function generate_function_file($tags) {
        $functions = [];
        $generator = new CodeGenerator();
        foreach ($tags as $tag) {
            /* @var TagSpec $tag */
            $functionName = str_replace("-", "_", $tag->tag_name);
            $function = new PhpFunction($functionName);
            self::create_shortcut_function_body($function, $tag->tag_name);
            $functions[] = $generator->generate($function);
        }
        return implode(PHP_EOL, $functions);

    }

    /**
     * @param PhpFunction|PhpMethod $methodOrFunction
     * @param $tagName
     */
    static function create_shortcut_function_body($methodOrFunction, $tagName) {

        if (is_a($methodOrFunction, PhpFunction::class)) {
            $className = "\\" . self::tag_qname($tagName);
        } else {
            $className = self::TAGS_NAMESPACE . "\\" . self::create_class_name($tagName);
        }

        $methodOrFunction->setBody("return new $className();");
        $returnTag = new ReturnTag();
        $returnTag->setType($className);
        $methodOrFunction->getDocblock()->appendTag($returnTag);
    }

    /**
     * @param array $tags
     * @return string
     */
    static function generate_shortcut_class($tags) {

        $class = new PhpClass(self::AMP_CLASS_NAME);
        $class->setNamespace(__NAMESPACE__);
        foreach ($tags as $tag) {
            /* @var TagSpec $tag */
            $methodName = Utils::allAfter($tag->tag_name, "-");
            $methodName = Inflector::camelize($methodName);
            $methodName = self::override_php_keywords($methodName);
            $method = new PhpMethod($methodName);
            self::create_shortcut_function_body($method, $tag->tag_name);
            $class->setMethod($method);
        }
        $generator = new CodeFileGenerator();
        return $generator->generate($class);
    }

    static public function generate() {
        $rules = ValidationRulesFactory::createValidationRules();
        $whitelistedTags = ["template"];

        foreach ($rules->attr_lists as $attr_list) {
            /* @var AttrList $tag */
            $filename = self::create_class_filename(self::TRAITS_NAMESPACE, $attr_list->name);
            $code = self::generate_trait_class($attr_list);
            self::write_file($filename, $code);
        }
        $all_tags = [];
        foreach ($rules->tags as $tag) {
            /* @var TagSpec $tag */

            /**
             * Creates the require Tags
             */
            if (Utils::startsWith($tag->spec_name, "amp") && $tag->tag_name == "script") {
                $code = self::generate_script_tag_class($tag);
                $classFilename = self::create_class_filename(self::SCRIPT_TAGS_NAMESPACE, $tag->spec_name);
                self::write_file($classFilename, $code);
            }

            /**
             * Creates the amp tags.
             */
            if (Utils::startsWith($tag->tag_name, "amp-") || in_array($tag->tag_name, $whitelistedTags)) {
                $code = self::generate_tag_class($tag);
                $classFilename = self::create_class_filename(self::TAGS_NAMESPACE, $tag->tag_name);
                self::write_file($classFilename, $code);
                $all_tags[] = $tag;
            }
        }
        $code = self::generate_shortcut_class($all_tags);
        $shortcut_filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . self::AMP_CLASS_NAME . ".php";
        self::write_file($shortcut_filename, $code);

        $code = self::generate_function_file($all_tags);
        $functions_filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . "functions.php";
        self::write_file($functions_filename, $code);

    }
}