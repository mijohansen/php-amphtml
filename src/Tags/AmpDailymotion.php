<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpDailymotionExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-dailymotion.html
 */
class AmpDailymotion extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-dailymotion';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpDailymotionExtensionJsScript::class);
		parent::__construct($attrs);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataEndscreenEnable($value) {
		return $this->attr("data-endscreen-enable", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataInfo($value) {
		return $this->attr("data-info", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataMute($value) {
		return $this->attr("data-mute", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataSharingEnable($value) {
		return $this->attr("data-sharing-enable", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataStart($value) {
		return $this->attr("data-start", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataUiHighlight($value) {
		return $this->attr("data-ui-highlight", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataUiLogo($value) {
		return $this->attr("data-ui-logo", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dataVideoid($value) {
		return $this->attr("data-videoid", $value);
	}
}
