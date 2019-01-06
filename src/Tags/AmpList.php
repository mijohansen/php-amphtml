<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpListExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-list.html
 */
class AmpList extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-list';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpListExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function credentials($value) {
		return $this->attr("credentials", $value);
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
	public function template($value) {
		return $this->attr("template", $value);
	}
}
