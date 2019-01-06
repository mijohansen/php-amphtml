<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait AmpLayoutAttrs {

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
	public function heights($value) {
		return $this->attr("heights", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function layout($value) {
		return $this->attr("layout", $value);
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
	public function width($value) {
		return $this->attr("width", $value);
	}
}
