<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-social-share.html
 * @see amp-social-share extension .js script
 */
class AmpSocialShareExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-social-share");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-social-share-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
