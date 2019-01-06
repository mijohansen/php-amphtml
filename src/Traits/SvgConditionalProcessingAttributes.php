<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait SvgConditionalProcessingAttributes {

	/**
	 * @param $value
	 * @return $this
	 */
	public function requiredextensions($value) {
		return $this->attr("requiredextensions", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function requiredfeatures($value) {
		return $this->attr("requiredfeatures", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function systemlanguage($value) {
		return $this->attr("systemlanguage", $value);
	}
}
