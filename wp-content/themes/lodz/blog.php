<?php 
$options = _WSH()->option();
lodz_bunch_global_variable();
 ?>
<!-- News Block -->
 <!-- News Block -->
<div class="news-block">
	<div class="inner-box">
		<?php if(has_post_thumbnail()):?>
		<div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
		<?php endif;?>
		<div class="lower-content">
			<span class="date"><?php echo get_the_date()?></span>
			
			<h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
			<div class="text"><?php the_excerpt();?></div>
			<div class="more-link">
				<?php if (lodz_set($options, 'btn_title')) : ?>	
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="read-more theme-btn"><?php echo wp_kses_post(lodz_set($options, 'btn_title'));?> <span class="arrow fa fa-long-arrow-right"></span></a>
				<?php else : ?>
				<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="read-more theme-btn"><?php esc_html_e(' Read More ', 'lodz');?> <span class="arrow fa fa-long-arrow-right"></span></a>
				<?php endif ; ?>
				</div>
			
<ul class="info">

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
			
		</div>
	</div>
</div>