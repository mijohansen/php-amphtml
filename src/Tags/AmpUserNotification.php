<?php
namespace AmpHTML\Tags;

use AmpHTML\ScriptTags\AmpAnalyticsExtensionJsScript;
use AmpHTML\ScriptTags\AmpUserNotificationExtensionJsScript;
use AmpHTML\Traits\AmpLayoutAttrs;
use AmpHTML\Traits\ExtendedAmpGlobal;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-user-notification.html
 */
class AmpUserNotification extends \AmpHTML\AbstractTag {

	use ExtendedAmpGlobal;
	use AmpLayoutAttrs;

	/**
	 */
	protected $tagName = 'amp-user-notification';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->requireScript(AmpAnalyticsExtensionJsScript::class);
		$this->requireScript(AmpUserNotificationExtensionJsScript::class);
		parent::__construct($attrs);
	}
}
