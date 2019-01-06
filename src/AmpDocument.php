<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-01-06
 * Time: 01:17
 */

namespace AmpHTML;

use AmpHTML\ScriptTags\AmphtmlEngineV0jsScript;

class AmpDocument {

    // Hold the class instance.
    private static $instance = null;

    protected $required = [];

    protected $lessParser;

    /**
     * @return \Less_Parser
     */
    public function getLessParser() {
        return $this->lessParser;
    }
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new AmpDocument();
            self::$instance->required = [AmphtmlEngineV0jsScript::class];
            self::$instance->lessParser = new \Less_Parser();
        }

        return self::$instance;
    }

    protected $canonical;
    protected $title;

    /**
     * @return mixed
     */
    public function getCanonical() {
        return $this->canonical;
    }

    /**
     * @param mixed $canonical
     */
    public function setCanonical($canonical) {
        $this->canonical = $canonical;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    protected function __construct() { }

    public function requireScript($val) {
        $this->required[] = $val;
    }

    public function getScripts() {
        $this->required = array_unique($this->required);
        $scripts = [];
        foreach ($this->required as $tag) {
            /* @var AbstractTag $tag */
            $scripts[] = "  " . (new $tag);
        }
        return implode("", $scripts);
    }

    public function start() {
        ob_start();
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getHeader() {
        $scripts = $this->getScripts();
        $lines = [];
        if($this->getTitle()){
            $lines[] = "  <title>{$this->getTitle()}</title>";
        }
        if($this->getCanonical()){
            $lines[] = '  <link rel="canonical" href="'.$this->getCanonical().'/>';
        }
        $headers = implode(PHP_EOL, $lines);
        $style = $this->getLessParser()->getCss();
        $style = str_replace(PHP_EOL, "", $style);
        return <<<HTML
<!doctype html>
<html ⚡>
<head>
  <meta charset="utf-8">
$headers
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
  <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <style amp-custom>$style</style>
$scripts
</head>
<body>

HTML;
    }

    public function getFooter() {
        return <<<HTML
</body>
</html>
HTML;

    }

    /**
     * @return string
     * @throws \Exception
     */
    public function render() {
        $body = ob_get_clean();
        return $this->getHeader() . $body . $this->getFooter();
    }
}