<?php
/**
 * Callback functions for active_callback.
 *
 * @package Trade_Line
 */

if ( ! function_exists( 'trade_line_is_featured_slider_active' ) ) :

	/**
	 * Check if featured slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function trade_line_is_featured_slider_active( $control ) {

		if ( 'disabled' !== $control->manager->get_setting( 'theme_options[featured_slider_status]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'trade_line_is_featured_page_slider_active' ) ) :

	/**
	 * Check if featured page slider is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function trade_line_is_featured_page_slider_active( $control ) {

		if (
		'featured-page' === $control->manager->get_setting( 'theme_options[featured_slider_type]' )->value()
		&& 'disabled' !== $control->manager->get_setting( 'theme_options[featured_slider_status]' )->value()
		) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'trade_line_is_featured_content_active' ) ) :

	/**
	 * Check if featured content is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function trade_line_is_featured_content_active( $control ) {

		if ( 'disabled' !== $control->manager->get_setting( 'theme_options[featured_content_status]' )->value() ) {
			return true;
		} else {
			return false;
		}

	}

endif;

if ( ! function_exists( 'trade_line_is_featured_page_content_active' ) ) :

	/**
	 * Check if featured page content is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function trade_line_is_featured_page_content_active( $control ) {

		if (
		'featured-page' === $control->manager->get_setting( 'theme_options[featured_content_type]' )->value()
		&& 'disabled' !== $control->manager->get_setting( 'theme_options[featured_content_status]' )->value()
		) {
			return true;
		} else {
			return false;
		}

	}

endif;
