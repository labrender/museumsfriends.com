<div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side ">
                    <div class="event-list">
                        <!-- Event Block -->
                        
						<?php foreach( $atts['facts'] as $key => $item ): ?>
						
						<div class="event-block-two">
                            <div class="inner-box">
                                <div class="image-box"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                                </div>
                                <div class="lower-content">
                                    <div class="info"><?php esc_html_e('by ', 'lodz');?> <a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->subtitle); ?></a></div>
                                    <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
                                    <p><?php echo wp_kses_post($item->text); ?></p>
                                    <a href="<?php echo esc_url($item->link); ?>" class="read-more"><?php echo wp_kses_post($item->btn); ?><i><span class="arrow fa fa-long-arrow-right"></span></i></a>
                                </div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
				
            </div>
        </div>
    </div>  