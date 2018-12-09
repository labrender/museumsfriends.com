<section class="<?php echo esc_attr(wp_kses_post($class));?> project-section">
        <!--Porfolio Tabs-->
        <div class="project-tab">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!--Sec Title-->
                    <div class="sec-title light pull-left">
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($title);?></h2>
                    </div>
                    <div class="tab-btns-box pull-right">
                        <!--Tabs Header-->
                        <div class="tabs-header">
                            <ul class="product-tab-btns clearfix">
                                <li class="p-tab-btn active-btn" data-tab="#p-tab-1"><?php echo wp_kses_post($tab);?></li>
                                <li class="p-tab-btn" data-tab="#p-tab-2"><?php echo wp_kses_post($tab1);?></li>
                                <li class="p-tab-btn" data-tab="#p-tab-3"><?php echo wp_kses_post($tab2);?></li>
                                <li class="p-tab-btn" data-tab="#p-tab-4"><?php echo wp_kses_post($tab3);?></li>
                                <li class="p-tab-btn" data-tab="#p-tab-5"><?php echo wp_kses_post($tab4);?></li>
                            </ul>
                        </div>  
                    </div>                    
                </div>
            </div>
            <!--Tabs Content-->  
            <div class="p-tabs-content">
                <!--Portfolio Tab / Active Tab-->
                <div class="p-tab active-tab" id="p-tab-1">
                    <div class="project-carousel owl-theme owl-carousel">
                        <!--Gallery Item-->
						
						<?php foreach( $atts['all'] as $key => $item ): ?>
						
                        <div class="gallery-item">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>">
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="<?php echo esc_url($item->image); ?>" data-fancybox="gallery"><span class="icon flaticon-unlink-1"></span></a>
                                            <h3><?php echo wp_kses_post($item->text); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
                                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-2">
                    <div class="project-carousel owl-theme owl-carousel">
                        <!--Gallery Item-->
						
						<?php foreach( $atts['one'] as $key => $item ): ?>
						
                        <div class="gallery-item">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="<?php echo esc_url($item->image); ?>" data-fancybox="gallery"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="#"><span class="icon flaticon-unlink-1"></span></a>
                                            <h3><?php echo wp_kses_post($item->text); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
                <div class="p-tab" id="p-tab-3">
                    <div class="project-carousel owl-theme owl-carousel">
                        <!--Gallery Item-->
						
						<?php foreach( $atts['one'] as $key => $item ): ?>
						
                        <div class="gallery-item">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="<?php echo esc_url($item->image); ?>" data-fancybox="gallery"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="#"><span class="icon flaticon-unlink-1"></span></a>
                                            <h3><?php echo wp_kses_post($item->text); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
                
                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-4">
                    <div class="project-carousel owl-theme owl-carousel">
                        <!--Gallery Item-->
						
						<?php foreach( $atts['one'] as $key => $item ): ?>
						
                        <div class="gallery-item">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="<?php echo esc_url($item->image); ?>" data-fancybox="gallery"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="#"><span class="icon flaticon-unlink-1"></span></a>
                                            <h3><?php echo wp_kses_post($item->text); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
                
                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-5">
                    <div class="project-carousel owl-theme owl-carousel">
                        <!--Gallery Item-->
						
						<?php foreach( $atts['one'] as $key => $item ): ?>
						
                        <div class="gallery-item">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="<?php echo esc_url($item->image); ?>" data-fancybox="gallery"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="#"><span class="icon flaticon-unlink-1"></span></a>
                                            <h3><?php echo wp_kses_post($item->text); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>