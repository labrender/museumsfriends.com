    <!-- Sidebar Page Container -->
    <div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side">
                    <div class="event-detail">
                        <!-- Event Detail -->
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="image-box"><a href="<?php echo esc_url($page_link);?>"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                                </div>
                                <div class="lower-content">
                                    <div class="info"><?php esc_html_e('by ', 'lodz');?> <a href="<?php echo esc_url($page_link);?>"><?php echo wp_kses_post($subtitle);?></a></div>
                                    <h3><a href="<?php echo esc_url($page_link);?>"><?php echo wp_kses_post($title);?></a></h3>
                                    <p><?php echo wp_kses_post($text);?></p>
                                </div>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="detail-column col-md-5 col-sm-5 col-xs-12">
                                        <h3><?php echo wp_kses_post($title1);?></h3>
                                        <ul>
										
										 <?php foreach( $atts['one'] as $key => $item ): ?>
										 
                                            <li><?php echo wp_kses_post($item->title); ?> <span><?php echo wp_kses_post($item->text); ?></span></li>
											<?php endforeach;?>
                                        </ul>
                                    </div>

                                    <div class="venue-column col-md-7 col-sm-7 col-xs-12">
                                        <h3><?php echo wp_kses_post($title2);?></h3>
                                        <ul>
                                            
											<?php foreach( $atts['two'] as $key => $item ): ?>
											
                                            <li><?php echo wp_kses_post($item->title); ?> <span><?php echo wp_kses_post($item->text); ?></span></li>
											<?php endforeach;?>
                                        </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> 