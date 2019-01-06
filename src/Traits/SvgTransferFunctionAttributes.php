<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait SvgTransferFunctionAttributes {

	/**
	 * @param $value
	 * @return $this
	 */
	public function amplitude($value) {
		return $this->attr("amplitude", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function exponent($value) {
		return $this->attr("exponent", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function intercept($value) {
		return $this->attr("intercept", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function offset($value) {
		return $this->attr("offset", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function slope($value) {
		return $this->attr("slope", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function table($value) {
		return $this->attr("table", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function tablevalues($value) {
		return $this->attr("tablevalues", $value);
	}
}
