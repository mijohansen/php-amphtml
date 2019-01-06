<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpSidebarExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://github.com/ampproject/amphtml/blob/master/extensions/amp-sidebar/amp-sidebar.md
 */
class AmpSidebar extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-sidebar';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpSidebarExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function side($value) {
		return $this->attr("side", $value);
	}
}
