<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-01-06
 * Time: 00:48
 */

namespace AmpHTML;

use AmpHTML\Traits\GlobalAttrs;

abstract class AbstractTag {

    use GlobalAttrs;
    /**
     */
    protected $attrs = [];

    protected $tagName;

    protected $open = false;

    public function __construct($attrs = []) {
        foreach ($attrs as $k => $v){
            $this->attr($k, $v);
        }
    }

    /**
     * @param $scriptTag
     */
    protected function requireScript($scriptTag) {
        AmpDocument::getInstance()->requireScript($scriptTag);
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    protected function attr($key, $value) {
        $this->attrs[$key] = $value;
        return $this;
    }

    public function __toString() {
        $attr_str = implode(' ', array_map(
            function ($k, $v) { return $k . '="' . htmlspecialchars($v) . '"'; },
            array_keys($this->attrs), $this->attrs
        ));
        $attr_str = str_replace('="" ', " ", $attr_str);
        return "<" . $this->tagName . " " . $attr_str . ">" . ($this->open ? PHP_EOL  : $this->end());
    }

    /**
     * @return $this
     */
    public function open() {
        $this->open = true;
        return $this;
    }

    /**
     * @return string
     */
    public function end() {
        return "</" . $this->tagName . ">" . PHP_EOL;
    }
}