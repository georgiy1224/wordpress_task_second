<?php

	/**
	 * FusionRedux Framework is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 2 of the License, or
	 * any later version.
	 * FusionRedux Framework is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	 * GNU General Public License for more details.
	 * You should have received a copy of the GNU General Public License
	 * along with FusionRedux Framework. If not, see <http://www.gnu.org/licenses/>.
	 *
	 * @package     FusionRedux_Field
	 * @subpackage  ACE_Editor
	 * @version     3.0.0
	 */

// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

// Don't duplicate me!
	if ( ! class_exists( 'FusionReduxFramework_ace_editor' ) ) {
		class FusionReduxFramework_ace_editor {

			public $parent;
			public $field;
			public $value;

			/**
			 * Field Constructor.
			 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
			 *
			 * @since FusionReduxFramework 1.0.0
			 */
			function __construct( $field = array(), $value = '', $parent = null ) {
				$this->parent = $parent;
				$this->field  = $field;
				$this->value  = $value;

				if ( is_array( $this->value ) ) {
					$this->value = '';
				} else {
					$this->value = trim( $this->value );
				}

				if ( ! empty( $this->field['options'] ) ) {
					$this->field['args'] = $this->field['options'];
					unset( $this->field['options'] );
				}

			}

			/**
			 * Field Render Function.
			 * Takes the vars and outputs the HTML for the field in the settings
			 *
			 * @since FusionReduxFramework 1.0.0
			 */
			function render() {

				if ( ! isset( $this->field['mode'] ) ) {
					$this->field['mode'] = 'javascript';
				}
				if ( ! isset( $this->field['theme'] ) ) {
					$this->field['theme'] = 'monokai';
				}

				$params = array(
					'minLines' => 10,
					'maxLines' => 30,
				);

				if ( isset( $this->field['args'] ) && ! empty( $this->field['args'] ) && is_array( $this->field['args'] ) ) {
					$params = wp_parse_args( $this->field['args'], $params );
				}

				?>
				<div class="ace-wrapper">
					<input type="hidden"
						class="localize_data"
						value="<?php echo htmlspecialchars( json_encode( $params ) ); ?>"
					/>
					<textarea name="<?php echo esc_attr($this->field['name'] . $this->field['name_suffix']); ?>" id="<?php echo esc_attr($this->field['id']); ?>-textarea" class="ace-editor hide <?php echo esc_attr($this->field['class']); ?>" data-editor="<?php echo esc_attr($this->field['id']); ?>-editor" data-mode="<?php echo esc_attr($this->field['mode']); ?>" data-theme="<?php echo esc_attr($this->field['theme']); ?>"><?php echo esc_textarea($this->value); ?></textarea>
					<pre id="<?php echo esc_attr($this->field['id']); ?>-editor" class="ace-editor-area"><?php echo htmlspecialchars( $this->value ); ?></pre>
				</div>
			<?php
			}

			/**
			 * Enqueue Function.
			 * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
			 *
			 * @since       1.0.0
			 * @access      public
			 * @return      void
			 */
			public function enqueue() {
				global $fusion_library_latest_version;
				if ( ! wp_style_is( 'fusionredux-field-ace-editor-css' ) ) {
					wp_enqueue_style(
						'fusionredux-field-ace-editor-css',
						trailingslashit( FUSION_LIBRARY_URL ) . 'inc/redux/custom-fields/ace_editor/field_ace_editor.css',
						array(),
						$fusion_library_latest_version,
						'all'
					);
				}

				if ( ! wp_script_is( 'ace-editor-js' ) ) {
					wp_enqueue_script(
						'ace-editor-js',
						trailingslashit( FUSION_LIBRARY_URL ) . 'inc/redux/custom-fields/ace_editor/ace.js',
						array( 'jquery' ),
						$fusion_library_latest_version,
						true
					);
				}

				if ( ! wp_script_is( 'fusionredux-field-ace-editor-js' ) ) {
					wp_enqueue_script(
						'fusionredux-field-ace-editor-js',
						trailingslashit( FUSION_LIBRARY_URL ) . 'inc/redux/custom-fields/ace_editor/field_ace_editor.js',
						array( 'jquery', 'ace-editor-js', 'fusionredux-js' ),
						$fusion_library_latest_version,
						true
					);
				}
			}
		}
	}
