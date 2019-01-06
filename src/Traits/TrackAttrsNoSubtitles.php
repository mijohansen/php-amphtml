<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait TrackAttrsNoSubtitles {

	/**
	 * @param $value
	 * @return $this
	 */
	public function dflt($value) {
		return $this->attr("default", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function kind($value) {
		return $this->attr("kind", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function label($value) {
		return $this->attr("label", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function srclang($value) {
		return $this->attr("srclang", $value);
	}
}
