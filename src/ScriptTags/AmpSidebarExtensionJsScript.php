<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-sidebar.html
 * @see amp-sidebar extension .js script
 */
class AmpSidebarExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-sidebar");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-sidebar-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
