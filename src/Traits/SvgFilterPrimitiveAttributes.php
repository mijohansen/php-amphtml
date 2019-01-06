<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait SvgFilterPrimitiveAttributes {

	/**
	 * @param $value
	 * @return $this
	 */
	public function height($value) {
		return $this->attr("height", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function result($value) {
		return $this->attr("result", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function width($value) {
		return $this->attr("width", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function x($value) {
		return $this->attr("x", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function y($value) {
		return $this->attr("y", $value);
	}
}
