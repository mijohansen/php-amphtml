<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpInstallServiceworkerExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-install-serviceworker.html
 */
class AmpInstallServiceworker extends \AmpHTML\AbstractTag {

	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-install-serviceworker';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpInstallServiceworkerExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function src($value) {
		return $this->attr("src", $value);
	}
}
