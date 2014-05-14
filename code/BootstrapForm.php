<?php

/**
 * Builds a form that renders {@link FormField} objects
 * using templates that are compatible with Twitter Bootstrap.
 * Extra methods are decorated on to the {@link BootstrapFormField}
 * objects and their subclasses to support special features
 * of the framework.
 *
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 * @package boostrap_forms
 */
class BootstrapForm extends Form {


	/**
	 * @var string The template that will render this form
	 */
	protected $template = "BootstrapForm";


	/**
	 * @var string The layout of the form.
	 * @see BootstrapForm::setLayout()
	 */
	protected $formLayout = "";

	/**
	 * @var string The label column width.
	 * Only applies to horizontal layouts.
	 * @see BootstrapForm::setLabelWidth()
	 */
	protected $labelWidth = "col-sm-2";

	/**
	 * @var string The field column width.
	 * Only applies to horizontal layouts.
	 * @see BootstrapForm::setFieldWidth()
	 */
	protected $fieldWidth = "col-sm-10";

	/**
	 * @var string The action field column width.
	 * Only applies to horizontal layouts.
	 * @see BootstrapForm::setActionWidth()
	 */
	protected $actionWidth = "col-sm-10";

	/**
	 * @var string The action field column offset width.
	 * Only applies to horizontal layouts.
	 * @see BootstrapForm::setActionOffset()
	 */
	protected $actionOffset = "col-sm-offset-2";


	/**
	 * Sets form to disable/enable inclusion of Bootstrap CSS
	 *
	 * @deprecated In 3.1
	 * @param bool $bool
	 */
	public static function set_bootstrap_included($bool = true) {
		Config::inst()->set("BootstrapForm","bootstrap_included",$bool);
	}


	/**
	 * Sets form to disable/enable inclusion of jQuery
	 *
	 * @deprecated In 3.1
	 * @param bool $bool
	 */
	public static function set_jquery_included($bool = true) {
		Config::inst()->set("BootstrapForm","jquery_included",$bool);
	}


	/**
	 * Changes the templates of all the {@link FormField}
	 * objects in a given {@link FieldList} object to those
	 * that work the Bootstrap framework
	 *
	 * @param FieldList $fields
	 */
	public static function apply_bootstrap_to_fieldlist($fields) {
		$fields->bootstrapify();
	}


	/**
	 * Applies the Bootstrap transformation to the fields and actiosn
	 * of the form
	 *
	 * @return BootstrapForm
	 */
	public function applyBootstrap() {
		$this->applyBootstrapToFieldList($this->Fields());
		$this->applyBootstrapToFieldList($this->Actions());
		return $this;
	}


	/**
	 * Changes the templates of all the {@link FormField}
	 * objects in a given {@link FieldList} object to those
	 * that work the Bootstrap framework
	 *
	 * @param FieldList $fields
	 * @return BootstrapForm
	 */
	protected function applyBootstrapToFieldList($fields) {
		self::apply_bootstrap_to_fieldlist($fields);
		return $this;
	}


	/**
	 * Sets the desired layout of the form. Options include:
	 *		- "" (default vertical)
	 *		- "form-horizontal"
	 *		- "form-inline"
	 *
	 * @todo Add template support for "form-inline"
	 * @param string $layout The desired layout to use
	 * @return BootstrapForm
	 */
	public function setLayout($layout) {
		$this->formLayout = trim(strtolower($layout));
		return $this;
	}

	/**
	 * Sets the desired column width of the label. Ex:
	 * 		- "col-sm-2"
	 *
	 * @param string $width The desired width class to use
	 * @return BootstrapForm
	 */
	public function setLabelWidth($width) {
		$this->labelWidth = trim(strtolower($width));
		return $this;
	}

	/**
	 * Sets the desired column width of the field. Ex:
	 * 		- "col-sm-10"
	 *
	 * @param string $width The desired width class to use
	 * @return BootstrapForm
	 */
	public function setFieldWidth($width) {
		$this->fieldWidth = trim(strtolower($width));
		return $this;
	}

	/**
	 * Sets the desired action column width of the field. Ex:
	 * 		- "col-sm-10"
	 *
	 * @param string $width The desired width class to use
	 * @return BootstrapForm
	 */
	public function setActionWidth($width) {
		$this->actionWidth = trim(strtolower($width));
		return $this;
	}

	/**
	 * Sets the desired action column offset width of the field. Ex:
	 * 		- "col-sm-offset-2"
	 *
	 * @param string $width The desired width class to use
	 * @return BootstrapForm
	 */
	public function setActionOffset($width) {
		$this->actionOffset = trim(strtolower($width));
		return $this;
	}

	/**
	 * Gets the layout of the form.
	 * 
	 * @return string
	 */
	public function FormLayout() {
		return $this->formLayout;
	}

	/**
	 * Gets the column width of the label.
	 *
	 * @return string
	 */
	public function LabelWidth() {
		return $this->labelWidth;
	}

	/**
	 * Gets the column width of the field.
	 *
	 * @return string
	 */
	public function FieldWidth() {
		return $this->fieldWidth;
	}

	/**
	 * Gets the column width of the actions field.
	 *
	 * @return string
	 */
	public function ActionWidth() {
		return $this->actionWidth;
	}

	/**
	 * Gets the column width of the actions offset.
	 *
	 * @return string
	 */
	public function ActionOffset() {
		return $this->actionOffset;
	}


	/**
	 * Adds a "well," or sunken background and border, to the form
	 *
	 * @return BootstrapForm
	 */
	public function addWell() {
		return $this->addExtraClass("well");
	}


	/**
	 * Includes the dependency if necessary, applies the Bootstrap templates,
	 * and renders the form HTML output
	 *
	 * @return string
	 */
	public function forTemplate() {
		if(!$this->stat('bootstrap_included')) {
			Requirements::css(BOOTSTRAP_FORMS_DIR.'/css/bootstrap.css');
		}
		if(!$this->stat('jquery_included')) {
			Requirements::javascript(THIRDPARTY_DIR."/jquery/jquery.js");
		}
		Requirements::javascript(BOOTSTRAP_FORMS_DIR."/javascript/bootstrap_forms.js");
		$this->addExtraClass($this->formLayout);
		$this->applyBootstrap();
		return parent::forTemplate();
	}

}