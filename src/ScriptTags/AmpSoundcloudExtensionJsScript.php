<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-soundcloud.html
 * @see amp-soundcloud extension .js script
 */
class AmpSoundcloudExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-soundcloud");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-soundcloud-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
