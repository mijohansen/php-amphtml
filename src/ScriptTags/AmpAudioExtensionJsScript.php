<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-audio.html
 * @see amp-audio extension .js script
 */
class AmpAudioExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-audio");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-audio-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
