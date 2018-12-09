<?php if( $style == '1' ): ?>

   <!--Clients Section-->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> clients-section">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                
				<?php foreach( $atts['clients'] as $key => $item ): ?>
				
				<li class="slide-item"><figure class="image-box"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a></figure></li>
                
				<?php endforeach; ?>
            </ul>
        </div>
    </section>
    <!--End Clients Section-->
<?php endif; ?>
<?php if( $style == '2' ): ?>
   <!--Clients Section-->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> clients-section style-two">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                
				<?php foreach( $atts['clients'] as $key => $item ): ?>
				
				<li class="slide-item"><figure class="image-box"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a></figure></li>
                
				<?php endforeach; ?>
            </ul>
        </div>
    </section>
    <!--End Clients Section-->
<?php endif; ?>