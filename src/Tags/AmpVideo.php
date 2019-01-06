<?php
namespace AmpHTML\Tags;

use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/amp-video.html
 */
class AmpVideo extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-video';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("autoplay", "");
		$this->attr("controls", "");
		$this->attr("loop", "");
		$this->attr("muted", "");
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function alt($value) {
		return $this->attr("alt", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function attribution($value) {
		return $this->attr("attribution", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function autoplay($value) {
		return $this->attr("autoplay", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function controls($value) {
		return $this->attr("controls", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function loop($value) {
		return $this->attr("loop", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function muted($value) {
		return $this->attr("muted", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function placeholder($value) {
		return $this->attr("placeholder", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function poster($value) {
		return $this->attr("poster", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function preload($value) {
		return $this->attr("preload", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}
}
