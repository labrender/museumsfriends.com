<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   
   <section class="<?php echo esc_attr(wp_kses_post($class));?> news-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
			
			<?php while($query->have_posts()): $query->the_post();
        global $post ; 
        $post_meta = _WSH()->get_meta();
    ?>
			
                <!-- News Block -->
                <div class="news-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
						
                        <div class="lower-content">
							
							<?php if(!$blog_date == true): ?>
                            <span class="date"><?php echo get_the_date()?></span>
							<?php endif ; ?>
							
                            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                            <ul class="info">
							
							
							<li><i class="fa fa-user" aria-hidden="true"></i><?php esc_html_e('By: ', 'lodz');?> <?php the_author();?></a></li>
							
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
           <?php if($pagination == true): ?>			
				<div class="styled-pagination text-center">
					<ul class="clearfix">
					<?php lodz_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<i class="fa fa-caret-right"></i>', 'prev_text' => '<i class="fa fa-caret-left"></i>')); ?>
					</ul>
				</div>
		<?php endif ; ?>

        </div>
    </section>

<?php endif; wp_reset_postdata(); ?>