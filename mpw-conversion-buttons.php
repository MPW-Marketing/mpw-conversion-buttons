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
$cont .= '<div class="conv-btn '.$add_class.'"
window.open(\''.$link.'\',\'_blank\'">';
$cont .= '<a href="'.$link.'"';
if ($target !== ''){ $cont .= 'target="'.$target.'"';}
$cont .= '>'.$text.'</a>';
$cont .= '</div>';

return $cont;
}

add_shortcode( 'conv_button' , 'mpw_conv_button' );
