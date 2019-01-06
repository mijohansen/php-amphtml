<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpSpringboardPlayerExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-springboard-player/amp-springboard-player.html
 */
class AmpSpringboardPlayer extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-springboard-player';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpSpringboardPlayerExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataContentId($value) {
		return $this->attr("data-content-id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataDomain($value) {
		return $this->attr("data-domain", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataItems($value) {
		return $this->attr("data-items", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataMode($value) {
		return $this->attr("data-mode", $value);
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
	public function dataSiteId($value) {
		return $this->attr("data-site-id", $value);
	}
}
