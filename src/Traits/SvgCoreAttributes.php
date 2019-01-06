<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait SvgCoreAttributes {

	/**
	 * @param $value
	 * @return $this
	 */
	public function xmlBase($value) {
		return $this->attr("xml:base", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xmlLang($value) {
		return $this->attr("xml:lang", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xmlns($value) {
		return $this->attr("xmlns", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xmlnsXlink($value) {
		return $this->attr("xmlns:xlink", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xmlSpace($value) {
		return $this->attr("xml:space", $value);
	}
}
