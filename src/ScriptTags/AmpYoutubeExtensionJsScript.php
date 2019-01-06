<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-youtube.html
 * @see amp-youtube extension .js script
 */
class AmpYoutubeExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-youtube");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-youtube-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
