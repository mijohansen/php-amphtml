<?php
/**
 * @noinspection PhpUndefinedMethodInspection
 */
namespace AmpHTML\Traits;

/**
 */
trait SvgPresentationAttributes {

	/**
	 * @param $value
	 * @return $this
	 */
	public function alignmentBaseline($value) {
		return $this->attr("alignment-baseline", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function baselineShift($value) {
		return $this->attr("baseline-shift", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function clip($value) {
		return $this->attr("clip", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function clipPath($value) {
		return $this->attr("clip-path", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function clipRule($value) {
		return $this->attr("clip-rule", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function color($value) {
		return $this->attr("color", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function colorInterpolation($value) {
		return $this->attr("color-interpolation", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function colorInterpolationFilters($value) {
		return $this->attr("color-interpolation-filters", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function colorProfile($value) {
		return $this->attr("color-profile", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function colorRendering($value) {
		return $this->attr("color-rendering", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function cursor($value) {
		return $this->attr("cursor", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function direction($value) {
		return $this->attr("direction", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function display($value) {
		return $this->attr("display", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function dominantBaseline($value) {
		return $this->attr("dominant-baseline", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function enableBackground($value) {
		return $this->attr("enable-background", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fill($value) {
		return $this->attr("fill", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fillOpacity($value) {
		return $this->attr("fill-opacity", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fillRule($value) {
		return $this->attr("fill-rule", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function filter($value) {
		return $this->attr("filter", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function floodColor($value) {
		return $this->attr("flood-color", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function floodOpacity($value) {
		return $this->attr("flood-opacity", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontFamily($value) {
		return $this->attr("font-family", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontSize($value) {
		return $this->attr("font-size", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontSizeAdjust($value) {
		return $this->attr("font-size-adjust", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontStretch($value) {
		return $this->attr("font-stretch", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontStyle($value) {
		return $this->attr("font-style", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontVariant($value) {
		return $this->attr("font-variant", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function fontWeight($value) {
		return $this->attr("font-weight", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function glyphOrientationHorizontal($value) {
		return $this->attr("glyph-orientation-horizontal", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function glyphOrientationVertical($value) {
		return $this->attr("glyph-orientation-vertical", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function imageRendering($value) {
		return $this->attr("image-rendering", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function kerning($value) {
		return $this->attr("kerning", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function letterSpacing($value) {
		return $this->attr("letter-spacing", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function lightingColor($value) {
		return $this->attr("lighting-color", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function markerEnd($value) {
		return $this->attr("marker-end", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function markerMid($value) {
		return $this->attr("marker-mid", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function markerStart($value) {
		return $this->attr("marker-start", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function mask($value) {
		return $this->attr("mask", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function opacity($value) {
		return $this->attr("opacity", $value);
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
	public function pointerEvents($value) {
		return $this->attr("pointer-events", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function shapeRendering($value) {
		return $this->attr("shape-rendering", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function stopColor($value) {
		return $this->attr("stop-color", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function stopOpacity($value) {
		return $this->attr("stop-opacity", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function stroke($value) {
		return $this->attr("stroke", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeDasharray($value) {
		return $this->attr("stroke-dasharray", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeDashoffset($value) {
		return $this->attr("stroke-dashoffset", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeLinecap($value) {
		return $this->attr("stroke-linecap", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeLinejoin($value) {
		return $this->attr("stroke-linejoin", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeMiterlimit($value) {
		return $this->attr("stroke-miterlimit", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeOpacity($value) {
		return $this->attr("stroke-opacity", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function strokeWidth($value) {
		return $this->attr("stroke-width", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function textAnchor($value) {
		return $this->attr("text-anchor", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function textDecoration($value) {
		return $this->attr("text-decoration", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function textRendering($value) {
		return $this->attr("text-rendering", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function unicodeBidi($value) {
		return $this->attr("unicode-bidi", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function visibility($value) {
		return $this->attr("visibility", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function wordSpacing($value) {
		return $this->attr("word-spacing", $value);
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function writingMode($value) {
		return $this->attr("writing-mode", $value);
	}
}
