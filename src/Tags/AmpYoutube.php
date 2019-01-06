<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpYoutubeExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-youtube.html
 */
class AmpYoutube extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-youtube';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpYoutubeExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataVideoid($value) {
		return $this->attr("data-videoid", $value);
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
	public function videoId($value) {
		return $this->attr("video-id", $value);
	}
}
