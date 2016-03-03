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
		), $atts));
$cont = '';
$cont .= '<div class="conv-btn '.$add_class.'" onclick="location.href=\''.$link.'\'">';
$cont .= '<a href="'.$link.'">'.$text.'</a>';
$cont .= '</div>';

return $cont;
}

add_shortcode( 'conv_button' , 'mpw_conv_button' );
