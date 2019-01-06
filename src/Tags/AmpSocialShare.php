<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpSocialShareExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-social-share.html
 */
class AmpSocialShare extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-social-share';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpSocialShareExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataShareEndpoint($value) {
		return $this->attr("data-share-endpoint", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function type($value) {
		return $this->attr("type", $value);
	}
}
