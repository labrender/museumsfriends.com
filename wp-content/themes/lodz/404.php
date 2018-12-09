<?php lodz_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option();
	if(lodz_set($_GET, 'layout_style')) $layout = lodz_set($_GET, 'layout_style'); else
	$layout = lodz_set( $settings, 'archive_page_layout', 'right' );
	if( !$layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = lodz_set( $settings, 'archive_page_sidebar', 'blog-sidebar' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = lodz_set($settings, '404_page_header_img');
	$title = lodz_set($settings, '404_page_header_title');
?>


 <!-- Error Page Section -->

	<?php if($bg):?>
	<section class="error-section" style="background-image:url('<?php echo esc_attr($bg)?>');">
	<?php else :?>
  <section class="error-page-section" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/images/background/14.jpg');?>);">
	<?php endif;?>	
	
	  <?php if(lodz_set($settings, '404_text')):?>

       <?php echo wp_kses_post(lodz_set($settings, '404_text')); ?>
		<?php else :?> 	  
        <h1><?php esc_html_e( '404', 'lodz' ); ?></h1>
      
		<h2><?php esc_html_e( 'Oops! Page Not Found!', 'lodz' ); ?></h2>
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Click the link below to return home.', 'lodz' ); ?></p>
        
			<?php endif;?>
		<?php if(lodz_set($settings, '404_bttn')):?> 
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"><?php echo wp_kses_post(lodz_set($settings, '404_bttn')); ?><span class="icon flaticon-right-arrow-1"></span></a>
			<?php else :?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"> <?php esc_html_e( "Go to Home", "lodz" ); ?><span class="icon flaticon-right-arrow-1"></span></a>
			<?php endif;?>
		
    </section>
<?php get_footer(); ?>