<section class="<?php echo esc_attr(wp_kses_post($class));?> exhibitions-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>

           <?php foreach( $atts['exhibition'] as $key => $item ): ?>

		   <!-- Exhibition Block -->
            <div class="exhibition-block <?php if($item->pullright == true ) echo 'style-two'; else echo ' '; ?>">
			
                <div class="row clearfix">
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="image"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a></div>
                        </div>
                    </div>
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
                            <span class="date"><?php echo wp_kses_post($item->subtitle); ?></span>
                            <p><?php echo wp_kses_post($item->text); ?></p>
                            <a href="<?php echo esc_url($item->link); ?>" class="theme-btn btn-style-three"><?php echo wp_kses_post($item->btn); ?></a>
                        </div>
                    </div>
                </div>
            </div>
			
			<?php endforeach; ?>
        </div>
    </section>