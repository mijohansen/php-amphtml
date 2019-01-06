<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpBridPlayerExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-brid-player/amp-brid-player.md
 */
class AmpBridPlayer extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-brid-player';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpBridPlayerExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataPartner($value) {
		return $this->attr("data-partner", $value);
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
	public function dataPlaylist($value) {
		return $this->attr("data-playlist", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataVideo($value) {
		return $this->attr("data-video", $value);
	}
}
