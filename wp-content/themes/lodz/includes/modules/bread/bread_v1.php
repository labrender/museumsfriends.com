<?php 
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = lodz_set($meta, 'header_img');
	$title = lodz_set($meta, 'header_title');
?>
<?php if(!lodz_set($meta, 'breadcrumb')):?>

 <section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
           <?php echo wp_kses_post(lodz_get_the_breadcrumb()); ?>
        </div>
    </section>
<?php endif;?>	
