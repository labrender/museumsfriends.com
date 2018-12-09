<?php lodz_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	if( $wp_query->is_posts_page ) {
		$meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
		$meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
		if(lodz_set($_GET, 'layout_style')) $layout = lodz_set($_GET, 'layout_style'); else
		$layout = lodz_set( $meta, 'layout', 'right' );
		$sidebar = lodz_set( $meta, 'sidebar', 'default-sidebar' );
		$view = lodz_set( $meta, 'view', 'grid' );
		$bg = lodz_set($meta1, 'header_img');
		$title = lodz_set($meta1, 'header_title');
		$sub_title = lodz_set($meta1, 'header_sub_title');
	} else {
		$settings  = _WSH()->option(); 
		if(lodz_set($_GET, 'layout_style')) $layout = lodz_set($_GET, 'layout_style'); else
		$layout = lodz_set( $settings, 'archive_page_layout', 'right' );
		$sidebar = lodz_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
		$view = lodz_set( $settings, 'archive_page_view', 'list' );
		$bg = lodz_set($settings, 'archive_page_header_img');
		$title = lodz_set($settings, 'archive_page_header_title');
		$sub_title = lodz_set($settings, 'archive_page_header_sub_title');
	}
	$layout = lodz_set( $_GET, 'layout' ) ? lodz_set( $_GET, 'layout' ) : $layout;
	$view = lodz_set( $_GET, 'view' ) ? lodz_set( $_GET, 'view' ) : $view;
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	_WSH()->page_settings = array('layout'=>'right', 'sidebar'=>$sidebar);
	$classes = ( $layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) ? 'col-lg-8 col-md-8 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	?>


<section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <h1><?php if($title) echo wp_kses_post($title); else esc_html_e('Blog', 'lodz');?></h1>
        </div>
 </section>	
    <!--End Page Title-->	
  <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">	
            
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar default-sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			<?php endif; ?>
           
             <?php if ( is_active_sidebar( $sidebar ) ) : ?> 
			 <div class="wp-style content-side  col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
			<?php 
			 else : ?>
			<div class="wp-style content-side  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<?php  endif ; ?>     

				  
				   <div class="blog-list">
			 
					<?php while( have_posts() ): the_post();?>
                        <!-- blog post item -->
                        <!-- Post -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                            <?php get_template_part( 'blog' ); ?>
                        <!-- blog post item -->
                        </div><!-- End Post -->
                    <?php endwhile;?>
                    <!--Start post pagination-->
                    <div class="styled-pagination">
                        <?php lodz_the_pagination(); ?>
                    </div>
                    <!--End post pagination-->
                </div>
            </div>
            <!--Content Side-->
            
          

		<?php if ( is_active_sidebar( $sidebar ) ) : ?> 
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php else : endif ; ?> 
			
            <!--Sidebar-->
            
        </div>
    </div>
    </div>

<?php get_footer(); ?>