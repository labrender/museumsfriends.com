<?php $options = _WSH()->option();
	get_header();
	$settings  = lodz_set(lodz_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	if(lodz_set($_GET, 'layout_style')) $layout = lodz_set($_GET, 'layout_style'); else
	$layout = lodz_set( $meta, 'layout', 'right' );
	$sidebar = lodz_set( $meta, 'sidebar', 'default-sidebar' );
	$layout = ($layout) ? $layout : 'right';
	$sidebar = ($sidebar) ? $sidebar : 'default-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || lodz_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-12 col-sm-12 col-xs-12 ' ;
	
	$bg = lodz_set($meta1, 'header_img');
	$title = lodz_set($meta1, 'header_title');
?>
<!--Page Title-->
<?php if(!lodz_set($options, 'pege_banner')):?>
<section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
            
			<?php echo wp_kses_post(lodz_get_the_breadcrumb()); ?>
        </div>
    </section>
 
<?php endif;?>

<!--Sidebar Page-->
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
                <!--Default Section-->
               <div class="blog-detail">
                    <div class="thm-unit-test">
					<?php while( have_posts() ): the_post();?>
                        <!-- blog post item -->
                        <div class="page_content">
						<?php the_content(); ?>
						</div>
						<div class="clearfix"></div>
                            <?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'lodz'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
						
							
						<div class="posts-nav">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <?php previous_post_link('%link','<div class="prev-post"><span class="fa fa-long-arrow-left"></span> &nbsp;&nbsp;&nbsp; '.esc_html__('Prev Post ', 'lodz').'</div>'); ?>
                                            </div>
                                            <div class="pull-right">
                                                <?php next_post_link('%link','<div class="next-post">'.esc_html__('Next Post ', 'lodz').' &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span> </div>'); ?>
                                            </div>                                
                                        </div>
                                    </div>
							 <div class="clearfix"></div>
                            <?php comments_template(); ?>		
                       <!-- end comments -->
                    <?php endwhile;?>
                    </div>
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
                            <aside class="sidebar blog-sidebar">
                                <?php dynamic_sidebar( $sidebar ); ?>
                            </aside>
                        </div>
			<?php else : endif ; ?> 
            
        </div>
    </div>
</div>

<?php get_footer(); ?>