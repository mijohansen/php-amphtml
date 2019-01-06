<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpKalturaPlayerExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-kaltura-player.html
 */
class AmpKalturaPlayer extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-kaltura-player';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpKalturaPlayerExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataPartner($value) {
		return $this->attr("data-partner", $value);
	}
}
