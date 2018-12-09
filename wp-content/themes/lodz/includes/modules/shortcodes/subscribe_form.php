   <!-- Subscribe Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> subscribe-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>
            <div class="subscribe-form">
                <form action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8">
				
                    <div class="form-group">
                        <input type="hidden" id="uri2" name="uri" value="<?php echo esc_attr(wp_kses_post($id)); ?>">
						
						<input type="email" name="email" value="" placeholder="<?php echo esc_attr(wp_kses_post($subtitle1)); ?>" required="">
                        <button type="submit" class="theme-btn btn-style-three"><?php echo wp_kses_post($btn);?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Subscribe Section -->