<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   $meta = _WSH()->get_meta('_bunch_header_settings');
   ?>
<?php if($query->have_posts()):  ?>   
   <section class="<?php echo esc_attr(wp_kses_post($class));?> news-section-two right_blog">
        <div class="auto-container">
          <?php if (wp_kses_post($title)) : ?>  
			<div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>
		<?php endif ;?> 
			
            <div class="row clearfix">
			
		<?php while($query->have_posts()): $query->the_post();
        global $post ; 
		?>
          <div class="news-block-two style-two col-md-6 col-sm-12 col-xs-12">
		
                    <div class="inner-box clearfix">
                        <span class="icon crown-icon"></span>
                        <div class="image-box">
                            <?php the_post_thumbnail();?>
                            <a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo wp_kses_post(lodz_trim(get_the_content(), $text_limit)); ?></a>
                        </div>
                        <div class="content-box">
							<?php if(!$blog_date == true): ?>
                            <span class="date"><?php echo get_the_date()?></span>
							<?php endif ; ?>
                            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                            <ul class="info">
                                <?php $like = get_post_meta( get_the_id(), '_jolly_like_it', true ); ?>
								<li><a href="javascript:void(0);" class="jolly_like_it" data-id="<?php the_ID(); ?>"><i class="fa fa-heart" aria-hidden="true"></i> <?php echo (int)$like;?></a></li>
								
								<?php if($blog_comments == true): ?>
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

<?php endif; wp_reset_postdata(); ?>