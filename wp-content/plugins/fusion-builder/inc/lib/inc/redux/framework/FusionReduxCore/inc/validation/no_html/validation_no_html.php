<?php

	if ( ! class_exists( 'FusionRedux_Validation_no_html' ) ) {
		class FusionRedux_Validation_no_html {

			public $parent;
			public $field;
			public $value;
			public $current;
			public $warning;

			/**
			 * Field Constructor.
			 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
			 *
			 * @since FusionReduxFramework 1.0.0
			 */
			function __construct( $parent, $field, $value, $current ) {
				$this->parent       = $parent;
				$this->field        = $field;
				$this->field['msg'] = ( isset( $this->field['msg'] ) ) ? $this->field['msg'] : __( 'You must not enter any HTML in this field, all HTML tags have been removed.', 'fusion-builder' );
				$this->value        = $value;
				$this->current      = $current;

				$this->validate();
			} //function

			/**
			 * Field Render Function.
			 * Takes the vars and validates them
			 *
			 * @since FusionReduxFramework 1.0.0
			 */
			function validate() {

				$newvalue = strip_tags( $this->value );

				if ( $this->value != $newvalue ) {
					$this->warning = $this->field;
				}

				$this->value = $newvalue;
			} //function
		} //class
	}
