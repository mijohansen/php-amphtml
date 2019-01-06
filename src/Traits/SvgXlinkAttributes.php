<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait SvgXlinkAttributes {

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkActuate($value) {
		return $this->attr("xlink:actuate", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkArcrole($value) {
		return $this->attr("xlink:arcrole", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkHref($value) {
		return $this->attr("xlink:href", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkRole($value) {
		return $this->attr("xlink:role", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkShow($value) {
		return $this->attr("xlink:show", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkTitle($value) {
		return $this->attr("xlink:title", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function xlinkType($value) {
		return $this->attr("xlink:type", $value);
	}
}
