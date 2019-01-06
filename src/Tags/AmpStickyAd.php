<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpStickyAdExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-sticky-ad.html
 */
class AmpStickyAd extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-sticky-ad';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpStickyAdExtensionJsScript::class);
		parent::__construct($attrs);
	}
}
