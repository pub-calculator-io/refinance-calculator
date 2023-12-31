<?php
/*
Plugin Name: CI Refinance calculator
Plugin URI: https://www.calculator.io/refinance-calculator/
Description: This free and comprehensive refinance calculator can help you calculate monthly payments, amortization, total purchase price, and more.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_refinance_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Refinance Calculator by Calculator.iO";

function display_ci_refinance_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Refinance Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_refinance_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_refinance_calculator', 'display_ci_refinance_calculator' );