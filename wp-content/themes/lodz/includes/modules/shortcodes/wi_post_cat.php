    <div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side ">
                    <aside class="sidebar default-sidebar">
                        

                        <!-- Post Widget -->
                        <div class="sidebar-widget news-widget">
                            <div class="sidebar-title"><h3><?php echo wp_kses_post($title);?></h3></div>
                            <ul class="news-list">
                                
								<?php foreach( $atts['one'] as $key => $item ): ?>
								
								<li>
                                    <a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a>
                                    <span class="time"><?php echo wp_kses_post($item->text1); ?></span>
                                </li>
								
								<?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories-widget">
                            <div class="sidebar-title"><h3><?php echo wp_kses_post($title1);?></h3></div>
                            <ul class="cat-list clearfix">
                                
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