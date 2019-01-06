<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpCarouselExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-carousel.html
 */
class AmpCarousel extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-carousel';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("arrows", "");
		$this->attr("autoplay", "");
		$this->attr("dots", "");
		$this->attr("loop", "");
		$this->requireScript(AmpCarouselExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function arrows($value) {
		return $this->attr("arrows", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function autoplay($value) {
		return $this->attr("autoplay", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function controls($value) {
		return $this->attr("controls", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function delay($value) {
		return $this->attr("delay", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dots($value) {
		return $this->attr("dots", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function loop($value) {
		return $this->attr("loop", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function type($value) {
		return $this->attr("type", $value);
	}
}
