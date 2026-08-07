<?php
/**
 * Portfolio Analytics Manager — WordPress UI for Ksfraser\Portfolio.
 * @package Ksfraser\WP\Portfolio
 * Plugin Name: Portfolio Analytics Manager
 * Description: WordPress UI for KSF Portfolio Analytics calculations.
 * Version: 1.0.0
 * Author: Kevin Fraser
 */
namespace Ksfraser\WP\Portfolio;
function render_plan( int $debtor_no ): string {
    return sprintf( '<div class="ksf-portfolio-plan" data-debtor="%d">Portfolio Analytics plan loading…</div>', $debtor_no );
}
add_shortcode( 'ksf_portfolio_plan', static function ( $atts ) {
    $atts = shortcode_atts( [ 'debtor' => 0 ], $atts, 'ksf_portfolio_plan' );
    return render_plan( (int) $atts['debtor'] );
} );
