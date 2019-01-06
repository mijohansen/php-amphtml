<?php
namespace AmpHTML\Tags;

use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/amp-pixel.html
 */
class AmpPixel extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-pixel';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}
}
