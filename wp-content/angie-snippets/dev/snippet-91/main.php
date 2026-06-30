<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

const INFRAESTRUTURA_CARD_ASSETS_VERSION_d561b219_4b0f_477f_a00f_1c85b9fded39 = '1.0.0';

function register_infraestrutura_card_widget_d561b219_4b0f_477f_a00f_1c85b9fded39( $widgets_manager ) {
    require_once __DIR__ . '/widget-infraestrutura-card.php';
    $widgets_manager->register( new \AngieSnippets\Infraestrutura_Card_d561b219_4b0f_477f_a00f_1c85b9fded39() );
}
add_action( 'elementor/widgets/register', 'register_infraestrutura_card_widget_d561b219_4b0f_477f_a00f_1c85b9fded39' );

function register_infraestrutura_card_assets_d561b219_4b0f_477f_a00f_1c85b9fded39() {
	wp_register_style( 'infraestrutura-card-style-d561b219-4b0f-477f-a00f-1c85b9fded39', angie_cs_get_snippet_asset_url( __FILE__, 'style.css' ), [], INFRAESTRUTURA_CARD_ASSETS_VERSION_d561b219_4b0f_477f_a00f_1c85b9fded39 );
}
add_action( 'wp_enqueue_scripts', 'register_infraestrutura_card_assets_d561b219_4b0f_477f_a00f_1c85b9fded39' );
