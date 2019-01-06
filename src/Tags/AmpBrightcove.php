<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpBrightcoveExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-brightcove.html
 */
class AmpBrightcove extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-brightcove';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpBrightcoveExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataAccount($value) {
		return $this->attr("data-account", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataEmbed($value) {
		return $this->attr("data-embed", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataPlayer($value) {
		return $this->attr("data-player", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataPlaylistId($value) {
		return $this->attr("data-playlist-id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataVideoId($value) {
		return $this->attr("data-video-id", $value);
	}
}
