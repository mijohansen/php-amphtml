<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpIframeExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-iframe.html
 */
class AmpIframe extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-iframe';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("allowfullscreen", "");
		$this->attr("allowtransparency", "");
		$this->attr("resizable", "");
		$this->requireScript(AmpIframeExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function allowfullscreen($value) {
		return $this->attr("allowfullscreen", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function allowtransparency($value) {
		return $this->attr("allowtransparency", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function frameborder($value) {
		return $this->attr("frameborder", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function resizable($value) {
		return $this->attr("resizable", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function sandbox($value) {
		return $this->attr("sandbox", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function scrolling($value) {
		return $this->attr("scrolling", $value);
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
	public function srcdoc($value) {
		return $this->attr("srcdoc", $value);
	}
}
