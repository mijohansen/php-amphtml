<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-access-spec.html
 * @see amp-access extension .json script
 */
class AmpAccessExtensionJsonScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("id", "amp-access");
		$this->attr("type", "application/json");
		parent::__construct($attrs);
	}
}
