<?php lodz_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$meta = _WSH()->get_term_meta( '_bunch_category_settings' );
	_WSH()->page_settings = $meta; 
	if(lodz_set($_GET, 'layout_style')) $layout = lodz_set($_GET, 'layout_style'); else
	$layout = lodz_set( $meta, 'layout', 'right' );
	$sidebar = lodz_set( $meta, 'sidebar', 'blog-sidebar' );
	$view = lodz_set( $meta, 'view', 'list' );
	$view = lodz_set( $_GET, 'view' ) ? lodz_set( $_GET, 'view' ) : $view;
	$classes = ( !$layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = lodz_set($meta, 'header_img');
	$title = lodz_set($meta, 'header_title');
?>
<!--Page Title-->
<?php if(!lodz_set($options, 'tag_settings')):?>
<section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
            
			<?php echo wp_kses_post(lodz_get_the_breadcrumb()); ?>
        </div>
    </section>
<?php endif;?>
<!--Sidebar Page-->
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
           
			  <div class="wp-style content-side <?php echo esc_attr($classes);?>">
                   
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
            
            <!--Sidebar-->	
            <!-- sidebar area -->
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			
            <!--Sidebar-->
            
        </div>
    </div>
    </div>

<?php get_footer(); ?>