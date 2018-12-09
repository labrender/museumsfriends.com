<?php $count = 1;
$query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['testimonials_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>
   
  <?php if( $style == '1' ): ?> 
   <!-- Testimonial Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> testimonial-section" style="background-image: url(<?php echo esc_url($bgimage); ?>);">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>
            
            <div class="testimonial-carousel owl-carousel owl-theme">
               
               <?php while($query->have_posts()): $query->the_post();
							global $post;
							$testimonials_meta = _WSH()->get_meta(); ?>
               
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><?php the_post_thumbnail();?></figure>
                        </div>
						<div class="content-box">
                            <div class="name"><a href="<?php echo esc_url(lodz_set($meta1, 'meta_link')); ?>"><?php the_title();?></a></div>
                            <span class="designation"><?php echo wp_kses_post(lodz_set($testimonials_meta, 'meta_designation')); ?></span>
                            <p><?php echo wp_kses_post(lodz_trim(get_the_content(), $text_limit)); ?></p>
                       

					   </div>
                    </div>
                </div>
                
                <?php endwhile;?>
                
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
<?php endif; ?>
<?php if( $style == '2' ): ?>
  <!-- Testimonial Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> testimonial-section style-two">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>
            
			<?php while($query->have_posts()): $query->the_post();
							global $post;
							$testimonials_meta = _WSH()->get_meta(); ?>
			
            <div class="testimonial-carousel owl-carousel owl-theme">
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><?php the_post_thumbnail();?></figure>
                        </div>
                        <div class="content-box">
                            <div class="name"><a href="<?php echo esc_url(lodz_set($meta1, 'meta_link')); ?>"><?php the_title();?></a></div>
                            <span class="designation"><?php echo wp_kses_post(lodz_set($testimonials_meta, 'meta_designation')); ?></span>
                            <p><?php echo wp_kses_post(lodz_trim(get_the_content(), $text_limit)); ?></p>
                        </div>
                    </div>
                </div>

				<?php endwhile;?>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
<?php endif; ?>
<?php endif; wp_reset_postdata(); ?>