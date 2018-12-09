<?php

if( function_exists('bbpress') ) {
//Services
lodz_vc_map( array(
			"name" => esc_html__("bbPress Forums", 'lodz'),
			"base" => "bbp-forum-index",
			"class" => "",
			"category" => esc_html__('Jollyall', 'lodz'),
			"icon" => 'faqs' ,
			"params" => array(				
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => esc_html__("Forum", 'lodz'),
				   "param_name" => "forum",
				   "description" => ''
				),
				
			)
	    )
);

}

vc_add_param('vc_row', $param);
vc_add_param('vc_row_inner', $param);