     <section class="<?php echo esc_attr(wp_kses_post($class));?> contact-page-section">
        <div class="inner-container clearfix"> 
               
            <!-- Info Column -->
            <div class="info-column">
                <div class="inner-column">
                    
					<?php foreach( $atts['contact'] as $key => $item ): ?>
					
					<div class="info-box">
                        <h4><?php echo wp_kses_post($item->title); ?></h4>
                        <p><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></p>
                        <p><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text1); ?></a></p>
                    </div>
					
					<?php endforeach; ?>
                </div>
            </div>

            <!-- form Column -->
            <div class="form-column">
                <div class="inner-column">
                    <h3><?php echo wp_kses_post($title);?></h3>
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!--Contact Form-->
                        <?php echo do_shortcode($contact_form); ?>
                    </div><!--End Contact Form -->
                </div>
            </div>

        </div>
    </section>