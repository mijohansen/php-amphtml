<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpAudioExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-audio.html
 */
class AmpAudio extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-audio';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("loop", "");
		$this->attr("muted", "");
		$this->requireScript(AmpAudioExtensionJsScript::class);
		parent::__construct($attrs);
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
	public function loop($value) {
		return $this->attr("loop", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function muted($value) {
		return $this->attr("muted", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}
}
