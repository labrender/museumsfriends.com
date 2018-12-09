    <section class="<?php echo esc_attr(wp_kses_post($class));?> event-form-section">
        <div class="auto-container">
            <div class="event-form">
                <?php echo do_shortcode($contact_form); ?>
            </div>
        </div>
    </section>