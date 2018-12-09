<?php 
$options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
lodz_bunch_global_variable();
 ?>
<div class="news-block">
	<div class="inner-box">
		<?php if(has_post_thumbnail()):?>
		<div class="image-box">
			<div class="image"><?php the_post_thumbnail();?></div>
		</div>
		<?php endif;?>
		<div class="lower-content">
		<span class="date"><?php echo get_the_date()?></span>
		<?php if(lodz_set($meta, 'sposttitle')):?>
		<h2><?php the_title();?></h2>
		

		<?php endif ; ?>

<ul class="info post-metainfo">
<!--author-->	
<?php if(!lodz_set($options, 'author')):?>
<li>
<i class="meta_infox fa fa-user"></i>
<?php if (lodz_set($options, 'by_text')) : ?>
<?php echo wp_kses_post(lodz_set($options, 'by_text')); ?>
<?php else : ?>
<?php esc_html_e('By: ', 'lodz');?>
<?php endif ; ?>
<?php the_author();?>
<?php echo wp_kses_post(lodz_set($options, 'simbol')); ?>
</li>
<?php endif ; ?>
<!--date-->	
<?php if(lodz_set($options, 'date')):?>
<li><i class="meta_infox fa fa-calendar"></i>
<?php echo get_the_date()?>
<?php echo wp_kses_post(lodz_set($options, 'simbol')); ?>
</li>
<?php endif ; ?>
<!--comments-->	
<?php if(!lodz_set($options, 'comments')):?>
<li><i class="flaticon-speech-bubble-and-three-dots"></i><?php comments_number(); ?>
<?php echo wp_kses_post(lodz_set($options, 'simbol')); ?>
</li>
<?php endif ; ?>
<!--TAg -->	
<?php if(!lodz_set($options, 'tag')):?>	
<li>	
<?php the_tags(); ?>
</li>
<?php endif ; ?>	
<!--Like-->
</ul>		
			<div class="text">
				<?php the_content(); ?>
				<div class="clearfix"></div>
<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'lodz'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                			
									
			</div>
		
	<div class="post-share-options share-option clearfix">
				
				<?php if(!lodz_set($options, 'post_tag')):?>    
				<div class="pull-left tags"><?php the_tags(); ?></div>
								<?php endif;?>		
					
				
				<div class="pull-right">
					<?php if(!lodz_set($options, 'post_social')):?>    
									<?php if(function_exists('bunch_share_us')) echo wp_kses_post(bunch_share_us(get_the_id(),$post->post_name ));?>
					<?php endif;?>
				</div>
			</div>
			<?php if(!lodz_set($meta, 'navigation')):?>         
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
					<?php endif; ?>	
			
		</div>
	</div>
</div>
 <?php if(!lodz_set($options, 'commentbox')):?>	
	<?php comments_template(); ?> 
<?php endif;?> 
   
                        
                      