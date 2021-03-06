<?php add_action('after_setup_theme', 'lodz_bunch_theme_setup');
function lodz_bunch_theme_setup()
{
	global $wp_version;
	if(!defined('LODZ_VERSION')) define('LODZ_VERSION', '1.0');
	if( !defined( 'LODZ_ROOT' ) ) define('LODZ_ROOT', get_template_directory().'/');
	if( !defined( 'LODZ_URL' ) ) define('LODZ_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	
	load_theme_textdomain('lodz', get_template_directory() . '/languages');
	
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( "title-tag" );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'lodz'),
				'onepage_menu' => esc_html__('Onepage', 'lodz'),
				'sidebar_menu' => esc_html__('Sidebar Menu', 'lodz'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'lodz360x250', 360, 250, true ); //'360x250 Our Services'
	add_image_size( 'lodz7979', 79, 79, true ); //'79x79 Testimonials 1'
	add_image_size( 'lodz370x295', 370, 295, true ); //'370x295 Latest Projects'
	add_image_size( 'lodz360x240', 360, 240, true ); //'360x240 Latest News'
	add_image_size( 'lodz480x400', 480, 400, true ); //'480x400 Services Carousel'
	add_image_size( 'lodz270x220', 270, 220, true ); //'270x220 Our Team'
	
}

function lodz_bunch_widget_init()
{
	$options = _WSH()->option();
	global $wp_registered_sidebars;
	
	$theme_options = _WSH()->option();
	if( class_exists( 'lodz_Team' ) )register_widget( 'lodz_Team' );
	
	if( class_exists( 'lodz_RecentNews1' ) )register_widget( 'lodz_RecentNews1' );
	if( class_exists( 'lodz_AboutUs3' ) )register_widget( 'lodz_AboutUs3' );
	if( class_exists( 'lodz_Gallery' ) )register_widget( 'lodz_Gallery' );

	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'lodz' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'lodz' ),
	  'before_widget'=>'<div id="%1$s" class="mrside sidebar blog-sidebar widget sidebar-widget %2$s "><div class="widget-inner">',
	  'after_widget'=>'</div></div></div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div><div  class="new_side">'
	));
//'.  lodz_set($options, 'footercolumn').'
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'lodz' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'lodz' ),
	  'before_widget'=>'<div id="%1$s" class="mrfooter col-md-'.  lodz_set($options, 'footercolumn').' col-sm-4 footer-column footer-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<h2 class="widget-title">',
	  'after_title' => '</h2>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'lodz' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'lodz' ),
	  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	   'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3></div>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = lodz_set(lodz_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(lodz_set($sidebar , 'topcopy')) continue ;
		
		$name = lodz_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = lodz_bunch_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  sanitize_title( $slug ) ,
			'before_widget' => '<div id="%1$s" class="side-bar widget sidebar_widget %2$s">',
			'after_widget' => "</div>",
			 'before_title' => '<div class="sidebar-title"><h3>',
	         'after_title' => '</h3></div>'
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'lodz_bunch_widget_init' );

// Update items in cart via AJAX
function lodz_load_head_scripts() {
	$options = _WSH()->option();
    if ( !is_admin() ) {
		$protocol = is_ssl() ? 'https://' : 'http://';
	}
}
add_action( 'wp_enqueue_scripts', 'lodz_load_head_scripts' );

//global variables
function lodz_bunch_global_variable() {
    global $wp_query;
}

function lodz_enqueue_scripts() {
    //styles
	//Basic Style
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	//Default Style
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'mcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css' );
	
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	

	//Main Style
	wp_enqueue_style( 'lodz-main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'lodz-responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'lodz-custom-style', get_template_directory_uri() . '/css/custom.css' );
	//Color Change
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.js', array(), false, true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.js', array(), false, true );
	wp_enqueue_script( 'validate', get_template_directory_uri().'/js/validate.js', array(), false, true );
	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.js', array(), false, true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri().'/js/jquery.fancybox.js', array(), false, true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/js/appear.js', array(), false, true );

	//Extra Scripts
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/js/isotope.js', array(), false, true );
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/js/mixitup.js', array(), false, true );
	wp_enqueue_script( 'mcustomscrollbar', get_template_directory_uri().'/js/jquery.mCustomScrollbar.concat.min.js', array(), false, true );

	//Main Script
	wp_enqueue_script( 'lodz-main-script', get_template_directory_uri().'/js/script.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'lodz_enqueue_scripts' );

/*-------------------------------------------------------------*/
function lodz_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'lodz' );
	$FrankRuhlLibre = _x( 'on', 'Frank Ruhl Libre: on or off', 'lodz' );
 
    if ( 'off' !== $open_sans || 'off' !== $FrankRuhlLibre ) {
        $font_families = array();
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
        }
		
		if ( 'off' !== $FrankRuhlLibre ) {
       $font_families[] = 'Frank+Ruhl+Libre:300,400,500,700,900|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
        }
 
        $opt = get_option('lodz'.'_theme_options');
		if ( lodz_set( $opt, 'body_custom_font' ) ) {
			if ( $custom_font = lodz_set( $opt, 'body_font_family' ) )
				$font_families[] = $custom_font . ':300,300i,400,400i,600,700';
		}
		if ( lodz_set( $opt, 'use_custom_font' ) ) {
			$font_families[] = lodz_set( $opt, 'h1_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = lodz_set( $opt, 'h2_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = lodz_set( $opt, 'h3_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = lodz_set( $opt, 'h4_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = lodz_set( $opt, 'h5_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = lodz_set( $opt, 'h6_font_family' ) . ':300,300i,400,400i,600,700';
		}
		$font_families = array_unique( $font_families);
        
		$query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}
function lodz_theme_slug_scripts_styles() {
    wp_enqueue_style( 'lodz-theme-slug-fonts', lodz_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'lodz_theme_slug_scripts_styles' );
/*---------------------------------------------------------------------*/
function lodz_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'lodz_add_editor_styles' );
