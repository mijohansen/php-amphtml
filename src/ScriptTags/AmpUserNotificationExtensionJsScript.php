<?php
namespace AmpHTML\ScriptTags;

/**
 * @link https://www.ampproject.org/docs/reference/extended/amp-user-notification.html
 * @see amp-user-notification extension .js script
 */
class AmpUserNotificationExtensionJsScript extends \AmpHTML\AbstractTag {

	/**
	 */
	protected $tagName = 'script';

	/**
	 * @param array $attrs
	 */
	public function __construct(array $attrs = []) {
		$this->attr("async", "");
		$this->attr("custom-element", "amp-user-notification");
		$this->attr("src", "https://cdn.ampproject.org/v0/amp-user-notification-0.1.js");
		$this->attr("type", "text/javascript");
		parent::__construct($attrs);
	}
}
