<?php

/**
 * Creates a {@link TextField} or a subclass thereof that is compatible with the
 * Twitter Bootstrap CSS framework.
 *
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 * @package bootstrap_forms
 */
class BootstrapTextField extends BootstrapFormField {

	/**
	 * Adds text immediately to the left, abut the form field
	 *
	 * @param string $text The text to add
	 * @return BootstrapTextField
	 */
	public function prependText($text) {
		$this->owner->PrependedText = $text;
		return $this->owner;
	}

	/**
	 * Adds text immediately to the right, abut the form field
	 *
	 * @param string $text The text to add
	 * @return BootstrapTextField
	 */
	public function appendText($text) {
		$this->owner->AppendedText = $text;
		return $this->owner;
	}

}