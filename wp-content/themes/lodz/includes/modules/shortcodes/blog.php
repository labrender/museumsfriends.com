<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   
   <!-- News Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> news-section">
        <div class="auto-container">
            <div class="sec-title-two text-center light">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>

            <div class="news-carousel owl-carousel owl-theme">
                <!-- News Block -->
				
				<?php while($query->have_posts()): $query->the_post();
        global $post ; 
        $post_meta = _WSH()->get_meta();
    ?>  
				
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
                        <div class="lower-content">
                            
							<?php if(!$blog_date == true): ?>
							<span class="date"><?php echo get_the_date()?></span>
                            <?php endif ; ?>
							
							<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><h3><?php the_title();?></h3></a>
                            
							<ul class="info">
							
							<?php $like = get_post_meta( get_the_id(), '_jolly_like_it', true ); ?>
							<li><a href="javascript:void(0);" class="jolly_like_it" data-id="<?php the_ID(); ?>"><i class="fa fa-heart" aria-hidden="true"></i> <?php echo (int)$like;?></a></li>
							
							<?php if(!$blog_comments == true): ?>
							<li><i class="flaticon-speech-bubble-and-three-dots"></i>
							<?php comments_number(); ?>							
							<?php if (wp_kses_post($blog_symbol)) : ?>
							<?php echo wp_kses_post($blog_symbol);?>
							<?php else : ?>
							<?php esc_html_e(' ', 'lodz');?>
							<?php endif ; ?>
							</li>
							<?php endif ; ?>
                            </ul>
                        </div>
                    </div>
			     </div>

				  <?php endwhile;?>
            </div>
        </div>
    </section>
    <!-- End News Section -->

<?php endif; wp_reset_postdata(); ?>