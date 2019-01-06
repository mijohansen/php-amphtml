<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpJwplayerExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-jwplayer/amp-jwplayer.md
 */
class AmpJwplayer extends \AmpHTML\AbstractTag {

	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-jwplayer';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpJwplayerExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataMediaId($value) {
		return $this->attr("data-media-id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataPlayerId($value) {
		return $this->attr("data-player-id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataPlaylistId($value) {
		return $this->attr("data-playlist-id", $value);
	}
}
