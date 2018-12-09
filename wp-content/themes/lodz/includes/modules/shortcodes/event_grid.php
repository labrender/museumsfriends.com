<section class="<?php echo esc_attr(wp_kses_post($class));?> event-section event-grid">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Even Block -->
                
				<?php foreach( $atts['facts'] as $key => $item ): ?>
				
				<div class="event-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a></div>
                        <div class="lower-content">
                            <div class="info"><span class="flaticon-vertical-bookmark"></span> <?php esc_html_e('by ', 'lodz');?> <a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->subtitle); ?></a></div>
                            <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
                            <a href="<?php echo esc_url($item->link); ?>" class="read-more"><?php echo wp_kses_post($item->btn); ?> <i>&rarr;</i></a>
                        </div>
                    </div>
                </div>
				
				<?php endforeach; ?>
            </div>
        </div>
    </section>