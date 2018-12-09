<?php $options = _WSH()->option();
	get_header(); 
	$settings  = lodz_set(lodz_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(lodz_set($_GET, 'layout_style')) $layout = lodz_set($_GET, 'layout_style'); else
	$layout = lodz_set( $meta, 'layout', 'right' );
	if( !$layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = lodz_set( $meta, 'sidebar', 'default-sidebar' );
	
	$layout = ( $layout ) ? $layout : 'right';
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : 'col-lg-8 col-md-8 col-sm-12' ;
	/** Update the post views counter */
	_WSH()->post_views( true );
	$bg = lodz_set($meta1, 'header_img');
	$title = lodz_set($meta1, 'header_title');
?>
 <!--Page Title-->
     <section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
            
			<?php echo wp_kses_post(lodz_get_the_breadcrumb()); ?>
        </div>
    </section>
	
    <!-- Sidebar Page Container -->
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
            <!--Content Side-->	
            <?php if ( is_active_sidebar( $sidebar ) ) : ?> 
			 <div class="wp-style content-side col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
			<?php 
			 else : ?>
			<div class="wp-style content-side col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<?php  endif ; ?>   
			
                	<!--Blog Detail-->
                    <div class="blog-detail">

					<?php while( have_posts() ): the_post();
						global $post; 
						$post_meta = _WSH()->get_meta();
					?>
					 <?php get_template_part( 'singlepost' ); ?>
                    <?php endwhile;?>
                </div>
            </div>
            <!--Content Side-->
                <?php if ( is_active_sidebar( $sidebar ) ) : ?> 
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <aside class="sidebar blog-sidebar">
                                <?php dynamic_sidebar( $sidebar ); ?>
                            </aside>
                        </div>
			<?php else : endif ; ?> 
            
        </div>
    </div>
</div>

<?php get_footer(); ?>