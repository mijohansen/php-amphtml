<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait ExtendedAmpGlobal {

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
	public function noloading($value) {
		return $this->attr("noloading", $value);
	}
}
