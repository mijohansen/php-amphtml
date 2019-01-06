<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-analytics.html
 * @see amp-ad-metadata .json script
 */
class AmpAdMetadataJsonScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("type", "application/json");
		$this->attr("amp-ad-metadata", "");
		parent::__construct($attrs);
	}
}
