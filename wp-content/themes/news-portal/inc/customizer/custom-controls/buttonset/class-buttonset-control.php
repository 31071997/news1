<?php
/**
 * Customizer ButtonSet Control.
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.5.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'News_Portal_Control_Buttonset' ) ) :

	/**
	 * Radio Buttonset control
	 */
	class News_Portal_Control_Buttonset extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'np-buttonset';

		/**
         * Enqueue control related scripts/styles.
         *
         * @access public
         * @return void
         */
		public function enqueue() {
			wp_enqueue_style( 'np-buttonset', get_template_directory_uri() . '/inc/customizer/custom-controls/buttonset/buttonset.css', array(), NEWS_PORTAL_VERSION );

			wp_enqueue_script( 'np-buttonset', get_template_directory_uri() . '/inc/customizer/custom-controls/buttonset/buttonset.js', array( 'jquery' ), NEWS_PORTAL_VERSION, true );
		}

		/**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
		public function to_json() {
			parent::to_json();

			if ( isset( $this->default ) ) {
				$this->json['default'] = $this->default;
			} else {
				$this->json['default'] = $this->setting->default;
			}
			$this->json['value']       = $this->value();
			$this->json['choices']     = $this->choices;
			$this->json['link']        = $this->get_link();
			$this->json['id']          = $this->id;

			$this->json['inputAttrs'] = '';
			foreach ( $this->input_attrs as $attr => $value ) {
				$this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
			}

		}

		/**
		 * An Underscore (JS) template for this control's content (but not its container).
		 *
		 * Class variables for this control class are available in the `data` JS object;
		 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
		 *
		 * @see WP_Customize_Control::print_template()
		 *
		 * @access protected
		 */
		protected function content_template() {
			?>
			<# if ( data.label ) { #>
				<span class="customize-control-title">{{{ data.label }}}</span>
			<# } #>
			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>
			<div id="input_{{ data.id }}" class="buttonset">
				<# for ( key in data.choices ) { #>
					<input {{{ data.inputAttrs }}} class="switch-input" type="radio" value="{{ key }}" name="_customize-radio-{{{ data.id }}}" id="{{ data.id }}{{ key }}" {{{ data.link }}}<# if ( key === data.value ) { #> checked="checked" <# } #> />
					<label class="switch-label switch-label-<# if ( key === data.value ) { #>on <# } else { #>off<# } #>" for="{{ data.id }}{{ key }}">
						{{ data.choices[ key ] }}
					</label>
				<# } #>
			</div>
			<?php
		}
	}

endif;