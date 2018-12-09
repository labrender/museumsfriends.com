      <div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Sidebar Side-->
                <div class="sidebar-side ">
                    <aside class="sidebar default-sidebar">


                        <!-- Meta -->
                        <div class="sidebar-widget meta-widget">
                            <div class="sidebar-title"><h3><?php echo wp_kses_post($title);?></h3></div>
                            <ul class="meta-list">
                                
								<?php foreach( $atts['one'] as $key => $item ): ?>
								
                                <li><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?><span><?php echo wp_kses_post($item->text1); ?></span></a></li>
                                
								<?php endforeach; ?>
                            </ul> 
                        </div>

                        <!-- Popular tags -->
                        <div class="sidebar-widget tags-widget">
                            <div class="sidebar-title"><h3><?php echo wp_kses_post($title1);?></h3></div>
                            <ul class="tag-list clearfix">
                                
								<?php foreach( $atts['two'] as $key => $item ): ?>
								
								<li><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></li>
                                
								<?php endforeach; ?>
                            </ul> 
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div> 