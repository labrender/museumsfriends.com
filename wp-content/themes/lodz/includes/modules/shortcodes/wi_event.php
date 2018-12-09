    <div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">

                <!--Sidebar Side-->
                <div class="sidebar-side ">
                    <aside class="sidebar default-sidebar">

                        <!-- Tags -->
                        <div class="sidebar-widget post-widget">
                            <div class="sidebar-title"><h3><?php echo wp_kses_post($title);?></h3></div>
                            <div class="widget-content">
                                
								<?php foreach( $atts['event'] as $key => $item ): ?>
								
								<article class="post">
                                    <div class="thumb"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a></div>
                                    <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></h3>
                                    <div class="date"><?php echo wp_kses_post($item->text1); ?></div>
                                </article>

                                <?php endforeach; ?>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div> 