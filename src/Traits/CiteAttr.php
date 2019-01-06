<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait CiteAttr {

	/**
	 * @param $value
	 * @return $this
	 */
	public function cite($value) {
		return $this->attr("cite", $value);
	}
}
