<?php if( $style == '1' ): ?>

   <!-- Fun Fact Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> fun-fact-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($title);?></h2>
            </div>

            <div class="row clearfix">
                <div class="content-column col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>
                        <div class="row clearfix">
                            
							<?php foreach( $atts['funfacts'] as $key => $item ): ?>
							
							<div class="fact-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div class="icon-box"><span class="<?php echo esc_attr($item->icon); ?>"></span></div>
                                    <h4><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></h4>
                                </div>
                            </div>

							<?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>">
                                <a href="<?php echo esc_url($link);?>" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                                <div class="caption-box">
                                    <h3><?php echo wp_kses_post($title1);?></h3>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Fact Section -->
<?php endif; ?>
<?php if( $style == '2' ): ?>
 <!-- History Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?>  history-section-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="sec-title">
                            <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                            <h2><?php echo wp_kses_post($title);?></h2>
                        </div>
                        <div class="history-image">
                            <figure><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></figure>
                        </div>
                        <div class="text">
                            <p><?php echo wp_kses_post($text);?></p>                        
                        </div>
                        <a href="<?php echo esc_url($link);?>" class="theme-btn btn-style-three"><?php echo wp_kses_post($btn);?></a>
                    </div>
                </div>

                <div class="blocks-column col-md-5 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                           
							<?php foreach( $atts['funfacts'] as $key => $item ): ?>

						   <!-- History Block -->
                            <div class="history-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="<?php echo esc_attr($item->icon); ?>"></span></div>
                                    <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
                                    <p><?php echo wp_kses_post($item->text); ?></p>
                                </div>
                            </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End History Section -->

<?php endif; ?>