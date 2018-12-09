<?php
/**
 * King composer array
 *
 * @package Student WP
 * @author Shahbaz Ahmed <rashidcloud@gmail.com>
 * @version 1.0
 Predefine Variable
 Main  Arrays
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
/** ====Predefine Variable============ */
$orderby = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order By", BUNCH_NAME),
				"name"			=>	"sort",
				'options'		=>	array('date'=>esc_html__('Date', BUNCH_NAME),'title'=>esc_html__('Title', BUNCH_NAME) ,'name'=>esc_html__('Name', BUNCH_NAME), 'author'			=>	esc_html__('Author', BUNCH_NAME),'comment_count' =>esc_html__('Comment Count', BUNCH_NAME),'random' =>esc_html__('Random', BUNCH_NAME) ),
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$rvslider = array(
				'type'			=> 'dropdown',
				'label'			=> esc_html__('Choose Slider', BUNCH_NAME ),
				'name'			=> 'slider_slug',
				'options'		=> bunch_get_rev_slider( 0 ),
				'description'	=> esc_html__('Choose Slider', BUNCH_NAME )
			);
$order = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order", BUNCH_NAME),
				"name"			=>	"order",
				'options'		=>	(array('ASC'=>esc_html__('Ascending', BUNCH_NAME),'DESC'=>esc_html__('Descending', BUNCH_NAME) ) ),			
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$number = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Number', BUNCH_NAME ),
				"name"			=>	"num",
				"description"	=>	esc_html__('Enter Number of posts to Show.', BUNCH_NAME )
			);
$text_limit = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Text Limit', BUNCH_NAME ),
				"name"			=>	"text_limit",
				"description"	=>	esc_html__('Enter text limit of posts to Show.', BUNCH_NAME )
			);
$bgtitle = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('BG Title', BUNCH_NAME ),
				"name"			=>	"bgtitle",
				"description"	=>	esc_html__('Enter Background Title.', BUNCH_NAME )
			);			
$title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"title",
				"description"	=>	esc_html__('Enter Title.', BUNCH_NAME )
			);
$title1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Two', BUNCH_NAME ),
				"name"			=>	"title1",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);
$title2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Three', BUNCH_NAME ),
				"name"			=>	"title2",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);
		
$title3 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Four', BUNCH_NAME ),
				"name"			=>	"title3",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);	
$title4 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Four', BUNCH_NAME ),
				"name"			=>	"title4",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);
$tab = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab One', BUNCH_NAME ),
				"name"			=>	"tab",
				"description"	=>	esc_html__('Tab One', BUNCH_NAME )
			);	
$tab1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab Two', BUNCH_NAME ),
				"name"			=>	"tab1",
				"description"	=>	esc_html__('Tab Two', BUNCH_NAME )
			);	
$tab2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab Three', BUNCH_NAME ),
				"name"			=>	"tab2",
				"description"	=>	esc_html__('Tab Three', BUNCH_NAME )
			);
$tab3 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab Four', BUNCH_NAME ),
				"name"			=>	"tab3",
				"description"	=>	esc_html__('Tab Four', BUNCH_NAME )
			);	
$tab4 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab Five', BUNCH_NAME ),
				"name"			=>	"tab4",
				"description"	=>	esc_html__('Tab Five', BUNCH_NAME )
			);			
$subtitle = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"subtitle",
				"description"	=>	esc_html__('Enter subtitle.', BUNCH_NAME )
			);
$subtitle1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"subtitle1",
				"description"	=>	esc_html__('Enter subtitle.', BUNCH_NAME )
			);	
$subtitle2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"subtitle2",
				"description"	=>	esc_html__('Enter subtitle.', BUNCH_NAME )
			);
$text = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);	
$textx = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"textx",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);			
$ttitle = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"ttitle",
				"description"	=>	esc_html__('Enter the Title to show.', BUNCH_NAME )
			);	
$ttitle1 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"ttitle1",
				"description"	=>	esc_html__('Enter the Title to show.', BUNCH_NAME )
			);			
$text1 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text1",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);			
$text2 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text2",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);
$text3 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text3",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);
$text4 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text4",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);			
$email = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Email', BUNCH_NAME ),
				"name"			=>	"email",
				"description"	=>	esc_html__('Enter email.', BUNCH_NAME )
			);
$phone = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Phone', BUNCH_NAME ),
				"name"			=>	"phone",
				"description"	=>	esc_html__('Enter phone.', BUNCH_NAME )
			);
$address = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Address', BUNCH_NAME ),
				"name"			=>	"address",
				"description"	=>	esc_html__('Enter address.', BUNCH_NAME )
			);
		
				
$website = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Website', BUNCH_NAME ),
				"name"			=>	"website",
				"description"	=>	esc_html__('Enter website.', BUNCH_NAME )
			);
$working_hours = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Working Hours', BUNCH_NAME ),
				"name"			=>	"working_hours",
				"description"	=>	esc_html__('Enter Working Hours.', BUNCH_NAME )
			);
$latitude = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Latitude', BUNCH_NAME ),
				"name"			=>	"latitude",
				"description"	=>	esc_html__('Enter latitude.', BUNCH_NAME )
			);
$longitude = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Longitude', BUNCH_NAME ),
				"name"			=>	"longitude",
				"description"	=>	esc_html__('Enter longitude.', BUNCH_NAME )
			);
$zoom = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Map Zoom', BUNCH_NAME ),
				"name"			=>	"zoom",
				"description"	=>	esc_html__('Enter map zoom.', BUNCH_NAME )
			);
$btn = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn",
				"description"	=>	esc_html__('Enter Button title.', BUNCH_NAME )
			);
$btn1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn1",
				"description"	=>	esc_html__('Enter Button title.', BUNCH_NAME )
			);	
$btn2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn2",
				"description"	=>	esc_html__('Enter Button title.', BUNCH_NAME )
			);			
$link = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"link",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);	
$page_link = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"page_link",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);			
$link1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"link1",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);
			
$link2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"link2",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);
			
$image = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);	
$image1 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image1",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$image2 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image2",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$image3 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image3",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$image4 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image4",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$bgimage = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Bg Image', BUNCH_NAME ),
				"name"			=>	"bgimage",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Background Image.', BUNCH_NAME )
			);
$bgimage0 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('NO Background Image', BUNCH_NAME ),
				"name"			=>	"bgimage0",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('NO Background Image fot this Section.', BUNCH_NAME )
			);			
$bgimage1 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Bg Image', BUNCH_NAME ),
				"name"			=>	"bgimage1",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Background Image.', BUNCH_NAME )
			);
$multi_img = array(
				"type"			=>	"attach_images",
				"label"			=>	esc_html__('Multi Images', BUNCH_NAME ),
				"name"			=>	"multi_img",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Uplod multi images.', BUNCH_NAME )
			);
$sign = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Signature', BUNCH_NAME ),
				"name"			=>	"sign",
				"description"	=>	esc_html__('Choose Signature.', BUNCH_NAME )
			);	
$video_url = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Video URL', BUNCH_NAME ),
				"name"			=>	"video_url",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Enter video url.', BUNCH_NAME )
			);	
$icon = array(
				'type'			=>	'icon_picker',
				'label'			=>	esc_html__('Icon', BUNCH_NAME ),
				'name'			=>	'icon',
				'description'	=>	esc_html__('Enter your icon', BUNCH_NAME )
			);
$icon1 = array(
				'type'			=>	'icon_picker',
				'label'			=>	esc_html__('Icon', BUNCH_NAME ),
				'name'			=>	'icon1',
				'description'	=>	esc_html__('Enter your icon', BUNCH_NAME )
			);	
$icon2 = array(
				'type'			=>	'icon_picker',
				'label'			=>	esc_html__('Icon', BUNCH_NAME ),
				'name'			=>	'icon2',
				'description'	=>	esc_html__('Enter your icon', BUNCH_NAME )
			);			
$ff_start = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Start', BUNCH_NAME ),
				'name'			=>	'ff_start',
				'description'	=>	esc_html__('Enter Counter Start', BUNCH_NAME ),
				'value'			=>	'0',
			);
$ff_stop = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Stop', BUNCH_NAME ),
				'name'			=>	'ff_stop',
				'description'	=>	esc_html__('Enter Counter Stop', BUNCH_NAME )
			);
$ff_sign = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Sign', BUNCH_NAME ),
				'name'			=>	'ff_sign',
				'description'	=>	esc_html__('Enter Counter Sign', BUNCH_NAME )
			);
			
$date = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Date', BUNCH_NAME ),
				'name'			=>	'date',
				'description'	=>	esc_html__('Enter Date', BUNCH_NAME )
			);
$month = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Month', BUNCH_NAME ),
				'name'			=>	'month',
				'description'	=>	esc_html__('Enter Month', BUNCH_NAME )
			);
$year = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Date', BUNCH_NAME ),
				'name'			=>	'year',
				'description'	=>	esc_html__('Enter Year', BUNCH_NAME )
			);	
$time = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Time', BUNCH_NAME ),
				'name'			=>	'time',
				'description'	=>	esc_html__('Enter Time', BUNCH_NAME )
			);	
$digit = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);
$digit1 = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit1',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);
$digit2 = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit2',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);
$digit3 = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit3',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);				
$name = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Name', BUNCH_NAME ),
				'name'			=>	'name',
				'description'	=>	esc_html__('Enter Name', BUNCH_NAME )
			);

				

$contact_form = array(
					'type' => 'textarea',
					'label' => esc_html__( 'Contact Form', BUNCH_NAME ),
					'name' => 'contact_form',
					'description' => esc_html__( 'Enter The Contact Form.', BUNCH_NAME ),
				);
$cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__('Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array('taxonomy' =>	'category'), true),
				"description"	=>	__('Choose Category.', BUNCH_NAME)
			);
$services_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'services_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$projects_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'projects_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$gallery_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'gallery_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);			
$team_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'team_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$faq_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'faqs_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);			
$testimonials_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'testimonials_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$blog_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__('Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array('taxonomy' =>	'category'), true),
				"description"	=>	__('Choose Category.', BUNCH_NAME)
			);		
$faqs_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'faqs_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$exclude_cats = array(
			   "type"			=>	"textfield",
			   "label"			=>	__('Excluded Categories ID', BUNCH_NAME ),
			   "name"			=>	"exclude_cats",
			   "description"	=>	__('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
			);			
//Pricing
$feature_str = array(
		 'type' => 'textarea',
		 'label' => esc_html__( 'Feature List', BUNCH_NAME ),
		 'name' => 'feature_str',
		 'description' => esc_html__( 'Enter Feature List.', BUNCH_NAME ),
		);
$feature_str1 = array(
		 'type' => 'textarea',
		 'label' => esc_html__( 'Feature List Two', BUNCH_NAME ),
		 'name' => 'feature_str1',
		 'description' => esc_html__( 'Enter Feature List Two.', BUNCH_NAME ),
		);
$currency = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Name the Currency', BUNCH_NAME ),
		 'name' => 'currency',
		 'description' => esc_html__( 'Enter The Currency You want to Use', BUNCH_NAME ),
		);	

$amount	= array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Amount of Money', BUNCH_NAME ),
		 'name' => 'amount',
		 'description' => esc_html__( 'Enter The Amount of Money', BUNCH_NAME ),
		);	
		
$duration	= array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Duration of Package', BUNCH_NAME ),
		 'name' => 'duration',
		 'description' => esc_html__( 'Enter The Time validation of Package', BUNCH_NAME ),
		);		
$price_title = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Package Name', BUNCH_NAME ),
		 'name' => 'price_title',
		 'description' => esc_html__( 'Enter The Package Name', BUNCH_NAME ),
		);
$read_titel = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Read More Title', BUNCH_NAME ),
		 'name' => 'read_titel',
		 'description' => esc_html__( 'Enter The Read More Title', BUNCH_NAME ),
		);
$blog_authorby = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Posted By', BUNCH_NAME ),
		 'name' => 'blog_authorby',
		 'description' => esc_html__( 'Enter The Posted By Text', BUNCH_NAME ),
		);			
/**====Edited Section======  */			
$layout = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Column", BUNCH_NAME),
				"name"			=>	"column",
				'options'		=>	array(
				'12'=>esc_html__('One', BUNCH_NAME),
				'6'=>esc_html__('Two', BUNCH_NAME) ,
				'4'=>esc_html__('Three', BUNCH_NAME), 
				'3'=>	esc_html__('Four', BUNCH_NAME),
				'2' =>esc_html__('Six', BUNCH_NAME),
				'4' =>esc_html__('Default', BUNCH_NAME) ),
				
				"description"	=>	esc_html__("Set the number of Column to show", BUNCH_NAME)
			);

$column0 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Column", BUNCH_NAME),
				"name"			=>	"column",
				'options'		=>	array(
				'12'=>esc_html__('Default', BUNCH_NAME),
				),
				
				"description"	=>	esc_html__("Set the number of Column to show", BUNCH_NAME)
			);			
$column = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Column", BUNCH_NAME),
				"name"			=>	"column",
				'options'		=>	array(
				'12'=>esc_html__('One', BUNCH_NAME),
				'6'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>	esc_html__('Four', BUNCH_NAME),
				'2' =>esc_html__('Six', BUNCH_NAME),
				'4'=>esc_html__('Three', BUNCH_NAME),
				
				),
				
				"description"	=>	esc_html__("Set the number of Column to show", BUNCH_NAME)
			);
		

$class = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Section Class', BUNCH_NAME ),
				'name'			=>	'class',
				'description'	=>	esc_html__('Enter Section Class', BUNCH_NAME )
			);
			
$secid = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Section ID', BUNCH_NAME ),
				'name'			=>	'secid',
				'description'	=>	esc_html__('Enter Section ID', BUNCH_NAME )
			);			
$fullwidth = array(
    'name' => 'fullwidth',
    'label' => 'Full Width',
    'type' => 'checkbox', 
    'options' => array(  
        'fullwidth' => 'Full Width',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Full-width The Selection',
);
$pullright = array(
    'name' => 'pullright',
    'label' => 'Pull Right',
    'type' => 'checkbox', 
    'options' => array(  
        'pullright' => 'Pull Right',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Pull Right The Selection',
);
$post_text = array(
    'name' => 'post_text',
    'label' => 'Hide Post Text',
    'type' => 'checkbox', 
    'options' => array(  
        'post_text' => 'Hide Post Text',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Hide Post Text',
);
$taged = array(
    'name' => 'taged',
    'label' => 'Special',
    'type' => 'checkbox', 
    'options' => array(  
        'taged' => 'Special',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Pull Right The Selection',
);
$pagination = array(
    'name' => 'pagination',
    'label' => 'Pagination',
    'type' => 'checkbox', 
    'options' => array(  
        'pagination' => 'Pagination',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Pagination',
);
$blog_readmore = array(
    'name' => 'blog_readmore',
    'label' => 'Hide Read More Button',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_readmore' => 'Read More',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Hide Read More Button',
);
$blog_author = array(
    'name' => 'blog_author',
    'label' => 'Hide Blog Author',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_author' => 'Blog Author',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Author',
);
$blog_postmeta = array(
    'name' => 'blog_postmeta',
    'label' => 'Hide Blog Post Meta',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_postmeta' => 'Blog Post Meta',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Post Meta',
);
$blog_date = array(
    'name' => 'blog_date',
    'label' => 'Hide Blog Date',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_date' => 'Blog Date',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Date',
);
$blog_comments = array(
    'name' => 'blog_comments',
    'label' => 'Hide Blog Comments',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_comments' => 'Blog Comments',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Comments',
);
$blog_category = array(
    'name' => 'blog_category',
    'label' => 'Hide Blog Category',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_category' => 'Blog Category',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Category',
);
$blog_tag = array(
    'name' => 'blog_tag',
    'label' => 'Hide Blog Tag',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_tag' => 'Blog Tag',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Tag',
);
$blog_symbol = array(
				"type"			=>	"textfield",
				"label"			=>	esc_html__('Meta Divider', BUNCH_NAME ),
				"name"			=>	"blog_symbol",
				"description"	=>	esc_html__('Enter Meta Divider', BUNCH_NAME )
			);
$symbol = array(
				"type"			=>	"textfield",
				"label"			=>	esc_html__('Symbol', BUNCH_NAME ),
				"name"			=>	"blog_symbol",
				"description"	=>	esc_html__('Enter Symbol', BUNCH_NAME )
			);			
$fullwidth0 = array(
    'name' => 'fullwidth0',
    'label' => 'Full Width',
    'type' => 'checkbox', 
    'options' => array(  
        'fullwidth0' => 'Default Width',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Default Width of this Section',
);
$light = array(
    'name' => 'light',
    'label' => 'Light Version',
    'type' => 'checkbox', 
    'options' => array(  
        'light' => 'Light Version',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Light Version of The Selection',
);
$light0 = array(
    'name' => 'light0',
    'label' => 'Light Version',
    'type' => 'checkbox', 
    'options' => array(  
        'light0' => 'Not Applicable',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Not Applicable for this Section',
);

$show = array(
    'name' => 'show',
    'label' => 'Show',
    'type' => 'checkbox', 
    'options' => array(  
        'show' => 'Show',
        
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show The Selection',
);
$style0 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style0",
				'options'		=>	array(
				'1'=>esc_html__('Default Style', BUNCH_NAME),
				),
				"description"	=>	esc_html__("This is Default Style", BUNCH_NAME)
			);		
$style = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);	
$style1 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style1",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>esc_html__('Three', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);	
			
$style2 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style2",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>esc_html__('Three', BUNCH_NAME) ,
				'4'=>esc_html__('Four', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);
$style3 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style3",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>esc_html__('Three', BUNCH_NAME) ,
				'4'=>esc_html__('Four', BUNCH_NAME) ,
				'5'=>esc_html__('Five', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);
$color = array(
			'name' => 'color',
			'label' => 'Select Color',
			'type' => 'color_picker',
			'admin_label' => true,
		);	
$color0 = array(
			'name' => 'color0',
			'label' => 'NOT applicable on This Section',
			'type' => 'color_picker',
			'admin_label' => true,
		);			
			
/**====End of Predefine Variable======  */
$options = array();
/**====Main  Arrays========= */
$options['bunch_revslider'] = array(
					'name' => esc_html__('Revslider', BUNCH_NAME),
					'base' => 'bunch_revslider',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Revolution slider.', BUNCH_NAME),
					'params' => array(
						$rvslider,
						$class,
					),
			);
			
$options['bunch_info'] = array(
					'name' => esc_html__('Text Info', BUNCH_NAME),
					'base' => 'bunch_info',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Text Info', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$text,
						),	
					
					),
			);	
			
$options['bunch_history'] = array(
					'name' => esc_html__('History', BUNCH_NAME),
					'base' => 'bunch_history',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show History', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$bgimage,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							$text,
							$image,
						),	
					
					),
			);	
			
$options['bunch_art_text'] = array(
					'name' => esc_html__('Art Text', BUNCH_NAME),
					'base' => 'bunch_art_text',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Art Text', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							$text,
							$bgimage,
							
						),	
					
					),
			);	
			
$options['bunch_art_block'] = array(
					'name' => esc_html__('Art Block', BUNCH_NAME),
					'base' => 'bunch_art_block',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Art Block', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
				
						$class,
						$style0,

					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Art Block', BUNCH_NAME ),
							'name' => 'art_block',
							'description' => esc_html__( 'Enter Art Block Details.', BUNCH_NAME ),
							'params' => array(
								$title,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);
			
$options['bunch_services_img'] = array(
					'name' => esc_html__('Services_Img', BUNCH_NAME),
					'base' => 'bunch_services_img',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Our Services', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style,
							$column,

						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							$btn,
							$btn1,
							$page_link,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$services_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);	
			
$options['bunch_testimonials'] = array(
					'name' => esc_html__('Testimonial', BUNCH_NAME),
					'base' => 'bunch_testimonials',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Testimonial', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style,
							//$column,
							$bgimage,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$testimonials_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);

$options['bunch_blog'] = array(
					'name' => esc_html__('Blog', BUNCH_NAME),
					'base' => 'bunch_blog',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Blog', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$column,
							//$pagination,
							//$bgimage,
							
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							//$text,
							//$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$blog_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					esc_html__( 'Blog', BUNCH_NAME ) => array(
							//$blog_readmore,
							//$read_titel,
							//$blog_postmeta,
							//$blog_symbol,
							//$blog_authorby,
							//$blog_author,
							$blog_date,
							$blog_comments,
							//$blog_category,
							//$blog_tag,
							
						),
					),
			);	
$options['bunch_blog_two'] = array(
					'name' => esc_html__('Blog Two', BUNCH_NAME),
					'base' => 'bunch_blog_two',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Blog Two', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							//$column,
							//$pagination,
							//$bgimage,
							
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							//$text,
							//$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$blog_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					esc_html__( 'Blog', BUNCH_NAME ) => array(
							//$blog_readmore,
							//$read_titel,
							//$blog_postmeta,
							//$blog_symbol,
							//$blog_authorby,
							//$blog_author,
							$blog_date,
							$blog_comments,
							//$blog_category,
							//$blog_tag,
							
						),
					),
			);
$options['bunch_blog_right'] = array(
					'name' => esc_html__('Blog Right', BUNCH_NAME),
					'base' => 'bunch_blog_right',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Blog Right', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							//$column,
							//$pagination,
							//$bgimage,
							
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							//$text,
							//$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$blog_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					esc_html__( 'Blog', BUNCH_NAME ) => array(
							//$blog_readmore,
							//$read_titel,
							//$blog_postmeta,
							//$blog_symbol,
							//$blog_authorby,
							//$blog_author,
							$blog_date,
							$blog_comments,
							//$blog_category,
							//$blog_tag,
							
						),
					),
			);				
$options['bunch_blog_grid'] = array(
					'name' => esc_html__('Blog Grid', BUNCH_NAME),
					'base' => 'bunch_blog_grid',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Blog Grid', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$column,
							$pagination,
							//$bgimage,
							
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$blog_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					esc_html__( 'Blog', BUNCH_NAME ) => array(
							//$blog_readmore,
							//$read_titel,
							//$blog_postmeta,
							//$blog_symbol,
							//$blog_authorby,
							//$blog_author,
							$blog_date,
							$blog_comments,
							//$blog_category,
							//$blog_tag,
							
						),
					),
			);

$options['bunch_funfacts'] = array(
					'name' => esc_html__('Fun Facts', BUNCH_NAME),
					'base' => 'bunch_funfacts',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Fun Facts.', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style,
						$column,
						//$bgimage,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
						$subtitle,
						$title,
						$text,
						$image,
						$title1,
						$link,
						$btn,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Fun Facts', BUNCH_NAME ),
							'name' => 'funfacts',
							'description' => esc_html__( 'Enter Fun Facts Details.', BUNCH_NAME ),
							'params' => array(
								$icon,
								$title,
								$text,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);				
		
$options['bunch_projects_mix'] = array(
					'name' => esc_html__('Project Mix', BUNCH_NAME),
					'base' => 'bunch_projects_mix',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Projects', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style1,
							$column,
							//$bgimage,
							
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							//$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$projects_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);			
$options['bunch_gallery_home_two'] = array(
					'name' => esc_html__('Gallery Home Two', BUNCH_NAME),
					'base' => 'bunch_gallery_home_two',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Gallery Home Two', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
						),
					esc_html__( 'tabs', BUNCH_NAME ) => array(
							$tab,
							$tab1,
							$tab2,
							$tab3,
							$tab4,
						),
					esc_html__( 'All', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Gallery', BUNCH_NAME ),
							'name' => 'all',
							'description' => esc_html__( 'Enter Gallery Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								$text,
								
							),
						),
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Gallery', BUNCH_NAME ),
							'name' => 'one',
							'description' => esc_html__( 'Enter Gallery Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								$text,
								
							),
						),
						),
					
						
					),
			);			
$options['bunch_clients'] = array(
					'name' => esc_html__('Clients', BUNCH_NAME),
					'base' => 'bunch_clients',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Clients Facts.', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style,
						
						
					),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Clients', BUNCH_NAME ),
							'name' => 'clients',
							'description' => esc_html__( 'Enter ClientsFacts Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
							),
						),
						),
						
					),
			);

$options['bunch_subscribe_form']	=	array(
					'name' => esc_html__('Subscribe Form', BUNCH_NAME),
					'base' => 'bunch_subscribe_form',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Subscribe Form.', BUNCH_NAME),
					'params' => array(
								$class,
								$subtitle,
								$title,
								$subtitle1,
								$btn,
								
							),
						);
						
$options['bunch_video'] = array(
					'name' => esc_html__('Video', BUNCH_NAME),
					'base' => 'bunch_video',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Video', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$bgimage,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							$text,
							$image,
							$link,
							$btn,
							$title1,
							
						),	
					
					),
			);	
$options['bunch_event_form'] = array(
					'name' => esc_html__('Event Form', BUNCH_NAME),
					'base' => 'bunch_event_form',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Event Form', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$contact_form,
							
						),	
					
					),
			);
$options['bunch_event_list'] = array(
					'name' => esc_html__('Event List', BUNCH_NAME),
					'base' => 'bunch_event_list',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Event List', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
						),
						
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Event', BUNCH_NAME ),
							'name' => 'facts',
							'description' => esc_html__( 'Enter Event Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								$subtitle,
								$title,
								$text,
								$btn,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
					
					),
			);
			
$options['bunch_event_grid'] = array(
					'name' => esc_html__('Event Grid', BUNCH_NAME),
					'base' => 'bunch_event_grid',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Event Grid', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$column,
						),
						
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Event', BUNCH_NAME ),
							'name' => 'facts',
							'description' => esc_html__( 'Enter Event Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								$subtitle,
								$title,
								$btn,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
					
					),
			);
$options['bunch_event_details'] = array(
					'name' => esc_html__('Event Details', BUNCH_NAME),
					'base' => 'bunch_event_details',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Event Details', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$image,
							$subtitle,
							$title,
							$text,
							$title1,
							$title2,
						),
					esc_html__( 'One', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Event One', BUNCH_NAME ),
							'name' => 'one',
							'description' => esc_html__( 'Enter Event One Details.', BUNCH_NAME ),
							'params' => array(
								$title,
								$text,
								
							),
						),
						),
					esc_html__( 'Two', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Event Two', BUNCH_NAME ),
							'name' => 'two',
							'description' => esc_html__( 'Enter Event Two Details.', BUNCH_NAME ),
							'params' => array(
								$title,
								$text,
								
							),
						),
						),

					
					),
			);
$options['bunch_info_block'] = array(
					'name' => esc_html__('Info Block', BUNCH_NAME),
					'base' => 'bunch_info_block',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Info Block.', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$icon,
							$title,
							$text,
							$text1,
							$text2,
							$link,
							$link1,
							$link2,
						),
						
					),
			);
	

			
$options['bunch_art_facts'] = array(
					'name' => esc_html__('Art Facts', BUNCH_NAME),
					'base' => 'bunch_art_facts',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Art Facts', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
				
						$class,
						$style0,
						$bgimage,

					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							$text,
						),
					esc_html__( 'One', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Art Facts', BUNCH_NAME ),
							'name' => 'one',
							'description' => esc_html__( 'Enter Art Facts Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								$link,
								
							),
						),
						),
					esc_html__( 'Two', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Art Facts', BUNCH_NAME ),
							'name' => 'two',
							'description' => esc_html__( 'Enter Art Facts Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								$link,
								
							),
						),
						),
					esc_html__( 'Three', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Art Facts', BUNCH_NAME ),
							'name' => 'three',
							'description' => esc_html__( 'Enter Art Facts Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								$link,
								
							),
						),
						),
						
					),
			);
			
$options['bunch_exhibition'] = array(
					'name' => esc_html__('Exhibition', BUNCH_NAME),
					'base' => 'bunch_exhibition',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Exhibition', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Exhibition', BUNCH_NAME ),
							'name' => 'exhibition',
							'description' => esc_html__( 'Enter Exhibition Details.', BUNCH_NAME ),
							'params' => array(
								$pullright,
								$image,
								$title,
								$subtitle,
								$text,
								$btn,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);	
$options['bunch_info_home'] = array(
					'name' => esc_html__('Info Home', BUNCH_NAME),
					'base' => 'bunch_info_home',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Info Home', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
							$text,
							$title1,
							$text1,
							$title2,
							$subtitle,
							$subtitle1,
							$subtitle2,
							$btn,
							$link,
						),
						
					),
			);
$options['bunch_wi_search'] = array(
					'name' => esc_html__('Sidebar Search', BUNCH_NAME),
					'base' => 'bunch_wi_search',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Sidebar Search', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
						),
						
					),
			);
$options['bunch_wi_testimonial'] = array(
					'name' => esc_html__('Sidebar Testimonial', BUNCH_NAME),
					'base' => 'bunch_wi_testimonial',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Sidebar Testimonial', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$image,
							$title,
							$text,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Social', BUNCH_NAME ),
							'name' => 'social',
							'description' => esc_html__( 'Enter Social Details.', BUNCH_NAME ),
							'params' => array(
								$icon,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);
$options['bunch_wi_post_cat'] = array(
					'name' => esc_html__('Sidebar Post', BUNCH_NAME),
					'base' => 'bunch_wi_post_cat',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Sidebar Post', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
							$title1,
						),
					esc_html__( 'Post', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Post', BUNCH_NAME ),
							'name' => 'one',
							'description' => esc_html__( 'Enter Post Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								$text1,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
					esc_html__( 'Cat', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Cat', BUNCH_NAME ),
							'name' => 'two',
							'description' => esc_html__( 'Enter Cat Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);
$options['bunch_wi_event'] = array(
					'name' => esc_html__('Sidebar Event', BUNCH_NAME),
					'base' => 'bunch_wi_event',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Sidebar Event', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Event', BUNCH_NAME ),
							'name' => 'event',
							'description' => esc_html__( 'Enter Event Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								$text,
								$text1,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);
$options['bunch_wi_meta_tag'] = array(
					'name' => esc_html__('Sidebar Meta Tag', BUNCH_NAME),
					'base' => 'bunch_wi_meta_tag',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Sidebar Meta Tag', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
							$title1,
						),
					esc_html__( 'Meta', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Meta', BUNCH_NAME ),
							'name' => 'one',
							'description' => esc_html__( 'Enter Meta Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								$text1,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
					esc_html__( 'Tag', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Tag', BUNCH_NAME ),
							'name' => 'two',
							'description' => esc_html__( 'Enter Tag Details.', BUNCH_NAME ),
							'params' => array(
								$text,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);
$options['bunch_contact'] = array(
					'name' => esc_html__('Contact', BUNCH_NAME),
					'base' => 'bunch_contact',
					'class' => '',
					'category' => esc_html__('Lodz', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Contact', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						//$column,
						//$bgimage,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
							$contact_form,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Contact', BUNCH_NAME ),
							'name' => 'contact',
							'description' => esc_html__( 'Enter Contact Details.', BUNCH_NAME ),
							'params' => array(
								$title,
								$text,
								$text1,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
							),
						
			);	
/**=============End of Arrays======== */
return $options;