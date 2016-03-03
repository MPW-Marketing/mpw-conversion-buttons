<?php
/*
Plugin Name: MPW Convversion Buttons
Description: Shortcode for conversion buttons
Version: 0.1.0
*/

function mpw_conv_button ( $atts ) {
	extract( shortcode_atts( array(
		'link' => '#',
		'text'  => '',
		'add_class' => '',
		'target' => '',
		), $atts));
$cont = '';
$cont .= '<div class="conv-btn '.$add_class;
 if ($target == '_blank'){ $cont .= ' new-win';}
 $cont .= '">';
$cont .= '<a href="'.$link.'"';
if ($target !== ''){ $cont .= 'target="'.$target.'"';}
$cont .= '>'.$text.'</a>';
$cont .= '</div>';

return $cont;
}

add_shortcode( 'conv_button' , 'mpw_conv_button' );

function mpw_conv_scripts_method() {
    wp_enqueue_script( 'mpw-conv', plugins_url( '/js/mpw-conversion-buttons.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mpw_conv_scripts_method' );
