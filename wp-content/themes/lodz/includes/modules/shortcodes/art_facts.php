    <!-- Feture Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> feature-section-two">
        <div class="image-layer" style="background-image: url(<?php echo esc_url($bgimage); ?>);"></div>
        <div class="outer-container clearfix">
            <div class="text-column">
                <div class="inner-column">
                    
                    <div class="sec-title light">
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($title);?></h2>
                    </div>
                    <div class="text">
                        <p><?php echo wp_kses_post($text);?></p>
                    </div>
                </div>
            </div>

            <div class="feature-column">
                <div class="inner-column">
                    <div class="row clearfix">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="features-list clearfix">
                               
							   <?php foreach( $atts['one'] as $key => $item ): ?>
							   
							   <li><a href="<?php echo esc_url($link);?>"><?php echo wp_kses_post($item->text); ?></a></li>
                               
							   <?php endforeach; ?>
                            </ul>
                        </div>


                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="features-list clearfix">
                                
								<?php foreach( $atts['two'] as $key => $item ): ?>
								
								<li><a href="<?php echo esc_url($link);?>"><?php echo wp_kses_post($item->text); ?></a></li>
                                
								<?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="features-list clearfix">
                                
								<?php foreach( $atts['three'] as $key => $item ): ?>
								
								<li><a href="<?php echo esc_url($link);?>"><?php echo wp_kses_post($item->text); ?></a></li>
                                
								<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feture Section -->