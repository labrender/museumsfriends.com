<?php global $post;
$query_args = array('post_type' => 'bunch_services' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order);
if( $cat ) $query_args['services_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>
<?php if( $style == '1' ): ?>
<!-- Event Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> event-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>
            <div class="row clearfix">
                
				<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
				
				<!-- Even Block -->
                <div class="event-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>"><?php the_post_thumbnail();?></a></div>
                       
					   <div class="lower-content">
                            <div class="info"><span class="flaticon-vertical-bookmark"></span><?php esc_html_e('by', 'lodz');?><a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>"><?php echo wp_kses_post(lodz_trim(get_the_content(), $text_limit)); ?></a></div>
                           
						   <h3><a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                            
							<a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>" class="read-more"><?php echo wp_kses_post($btn);?><i>&rarr;</i></a>
                        </div>
                    </div>
                </div>

				<?php endwhile; ?>
            </div>
            <div class="btn-box">
                <a href="<?php echo esc_url($page_link);?>" class="theme-btn btn-style-two"><?php echo wp_kses_post($btn1);?></a>
            </div>
        </div>
    </section>
    <!-- End Event Section -->
<?php endif; ?>
<?php if( $style == '2' ): ?>
 <!-- Event Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> event-section style-two">
        <div class="auto-container">
            <div class="sec-title-two text-center light">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>
            <div class="row clearfix">
                
				<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
				
				<!-- Even Block -->
                <div class="event-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>"><?php the_post_thumbnail();?></a></div>
						
                        <div class="lower-content">
                            <div class="info"><span class="flaticon-vertical-bookmark"></span><?php esc_html_e('by', 'lodz');?><a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>"><?php echo wp_kses_post(lodz_trim(get_the_content(), $text_limit)); ?></a></div>
                            <h3><a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                            <a href="<?php echo esc_url(lodz_set($services_meta, 'meta_link')); ?>" class="read-more"><?php echo wp_kses_post($btn);?><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

				<?php endwhile; ?>
            </div>
            <div class="btn-box">
                <a href="<?php echo esc_url($page_link);?>" class="theme-btn btn-style-one"><?php echo wp_kses_post($btn1);?></a>
            </div>
        </div>
    </section>
    <!-- End Event Section -->
<?php endif; ?>



<?php endif; wp_reset_postdata(); ?>