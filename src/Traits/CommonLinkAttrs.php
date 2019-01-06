<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait CommonLinkAttrs {

	/**
	 * @param $value
	 * @return $this
	 */
	public function charset($value) {
		return $this->attr("charset", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function color($value) {
		return $this->attr("color", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function hreflang($value) {
		return $this->attr("hreflang", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function media($value) {
		return $this->attr("media", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function sizes($value) {
		return $this->attr("sizes", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function target($value) {
		return $this->attr("target", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function type($value) {
		return $this->attr("type", $value);
	}
}
