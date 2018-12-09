     <div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side ">
                    <aside class="sidebar default-sidebar">
                        

                        <!-- Testimonial Widget -->
                        <div class="sidebar-widget">
                            <div class="testimonial-widget">
                                <div class="testimonial-carousel owl-carousel owl-theme">
                                    <div class="testimonial-block-two">
                                        <div class="thumb"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></div>
                                        <h3><?php echo wp_kses_post($title);?></h3>
                                        <p><?php echo wp_kses_post($text);?></p>
                                        <ul class="social-icon">
                                            
											<?php foreach( $atts['social'] as $key => $item ): ?>
											
											<li><a href="<?php echo esc_url($item->link); ?>"><i class="fa <?php echo esc_attr($item->icon); ?>"></i></a></li>
                                            
											<?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
    </div>  