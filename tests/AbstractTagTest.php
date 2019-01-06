<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-01-06
 * Time: 20:49
 */

namespace AmpHTML;

use AmpHTML\Tags\AmpVimeo;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase {

    public function testThatFunctionCanBeInitiated() {
        $this->assertTrue(function_exists("amp_img"));
        $url = "/some/file";
        $actual = (string)amp_img()->src($url);
        $expected = "<amp-img src=\"/some/file\"></amp-img>";
        $this->assertEquals($expected, trim($actual));
    }

    public function testTraits() {
        $vimeo = new AmpVimeo();
        $methods_that_should_exist = ["height", "layout","media", "noloading", "placeholder"];
        foreach ($methods_that_should_exist as $method_name) {
            $this->assertTrue(method_exists($vimeo, $method_name));
        }
        $vimeo->height(456);
        $actual = (string)$vimeo;
        $expected = '<amp-vimeo height="456"></amp-vimeo>';
        $this->assertEquals($expected, trim($actual));

        $scripts = AmpDocument::getInstance()->getScripts();
        $needle = 'custom-element="amp-vimeo"';
        $this->assertContains($needle, $scripts);
    }

}
