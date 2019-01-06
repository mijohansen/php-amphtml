<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpSoundcloudExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-soundcloud.html
 */
class AmpSoundcloud extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-soundcloud';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpSoundcloudExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataColor($value) {
		return $this->attr("data-color", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataTrackid($value) {
		return $this->attr("data-trackid", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataVisual($value) {
		return $this->attr("data-visual", $value);
	}
}
