<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-install-serviceworker.html
 * @see amp-install-serviceworker extension .js script
 */
class AmpInstallServiceworkerExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-install-serviceworker");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
