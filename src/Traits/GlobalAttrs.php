<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait GlobalAttrs {

	/**
	 * @param $value
	 * @return $this
	 */
	public function accesskey($value) {
		return $this->attr("accesskey", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccess($value) {
		return $this->attr("amp-access", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessBehavior($value) {
		return $this->attr("amp-access-behavior", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessHide($value) {
		return $this->attr("amp-access-hide", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessId($value) {
		return $this->attr("amp-access-id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessLoader($value) {
		return $this->attr("amp-access-loader", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessLoading($value) {
		return $this->attr("amp-access-loading", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessOff($value) {
		return $this->attr("amp-access-off", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessOn($value) {
		return $this->attr("amp-access-on", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessShow($value) {
		return $this->attr("amp-access-show", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessStyle($value) {
		return $this->attr("amp-access-style", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ampAccessTemplate($value) {
		return $this->attr("amp-access-template", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaActivedescendant($value) {
		return $this->attr("aria-activedescendant", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaAtomic($value) {
		return $this->attr("aria-atomic", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaAutocomplete($value) {
		return $this->attr("aria-autocomplete", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaBusy($value) {
		return $this->attr("aria-busy", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaChecked($value) {
		return $this->attr("aria-checked", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaControls($value) {
		return $this->attr("aria-controls", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaDescribedby($value) {
		return $this->attr("aria-describedby", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaDisabled($value) {
		return $this->attr("aria-disabled", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaDropeffect($value) {
		return $this->attr("aria-dropeffect", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaExpanded($value) {
		return $this->attr("aria-expanded", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaFlowto($value) {
		return $this->attr("aria-flowto", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaGrabbed($value) {
		return $this->attr("aria-grabbed", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaHaspopup($value) {
		return $this->attr("aria-haspopup", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaHidden($value) {
		return $this->attr("aria-hidden", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaInvalid($value) {
		return $this->attr("aria-invalid", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaLabel($value) {
		return $this->attr("aria-label", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaLabelledby($value) {
		return $this->attr("aria-labelledby", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaLevel($value) {
		return $this->attr("aria-level", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaLive($value) {
		return $this->attr("aria-live", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaMultiline($value) {
		return $this->attr("aria-multiline", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaMultiselectable($value) {
		return $this->attr("aria-multiselectable", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaOrientation($value) {
		return $this->attr("aria-orientation", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaOwns($value) {
		return $this->attr("aria-owns", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaPosinset($value) {
		return $this->attr("aria-posinset", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaPressed($value) {
		return $this->attr("aria-pressed", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaReadonly($value) {
		return $this->attr("aria-readonly", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaRelevant($value) {
		return $this->attr("aria-relevant", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaRequired($value) {
		return $this->attr("aria-required", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaSelected($value) {
		return $this->attr("aria-selected", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaSetsize($value) {
		return $this->attr("aria-setsize", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaSort($value) {
		return $this->attr("aria-sort", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaValuemax($value) {
		return $this->attr("aria-valuemax", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaValuemin($value) {
		return $this->attr("aria-valuemin", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaValuenow($value) {
		return $this->attr("aria-valuenow", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function ariaValuetext($value) {
		return $this->attr("aria-valuetext", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function cls($value) {
		return $this->attr("class", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dir($value) {
		return $this->attr("dir", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function draggable($value) {
		return $this->attr("draggable", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fallback($value) {
		return $this->attr("fallback", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function iAmpAccessId($value) {
		return $this->attr("i-amp-access-id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function id($value) {
		return $this->attr("id", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function itemid($value) {
		return $this->attr("itemid", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function itemprop($value) {
		return $this->attr("itemprop", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function itemref($value) {
		return $this->attr("itemref", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function itemscope($value) {
		return $this->attr("itemscope", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function itemtype($value) {
		return $this->attr("itemtype", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function lang($value) {
		return $this->attr("lang", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function lightbox($value) {
		return $this->attr("lightbox", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function on($value) {
		return $this->attr("on", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function overflow($value) {
		return $this->attr("overflow", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function placeholder($value) {
		return $this->attr("placeholder", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function role($value) {
		return $this->attr("role", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function tabindex($value) {
		return $this->attr("tabindex", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function title($value) {
		return $this->attr("title", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function translate($value) {
		return $this->attr("translate", $value);
	}
}
