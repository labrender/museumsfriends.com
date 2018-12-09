  <!-- Feture Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> feature-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="feature-column">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <div class="col-md">
                                <ul class="features-list clearfix">
                                    
									<?php foreach( $atts['art_block'] as $key => $item ): ?>
									
									<li><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></li>
                                    
									<?php endforeach; ?>
                                </ul>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feture Section -->