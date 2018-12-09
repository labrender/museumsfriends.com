<?php if( $style == '1' ): ?>
<!-- Info Section Two -->
<section class="<?php echo esc_attr(wp_kses_post($class));?> info-section-two">
	<div class="outer-container">
		<div class="row clearfix">
			<!-- Info Box -->
			<div class="info-box">
				<div class="inner-box">
					<span class="icon <?php echo esc_attr($icon);?>"></span>
					<h3><?php echo wp_kses_post($title);?></h3>
					<p><?php echo wp_kses_post($text);?></p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Info Section Two -->
<?php endif; ?>
<?php if( $style == '2' ): ?>
<!-- Info Section Two -->
<section class="<?php echo esc_attr(wp_kses_post($class));?> info-section-two">
	<div class="outer-container">
		<div class="row clearfix">

			<!-- Info Box -->
			<div class="info-box">
				<div class="inner-box">
					<span class="icon <?php echo esc_attr($icon);?>"></span>
					<h3><?php echo wp_kses_post($title);?></h3>
					<p><a href="<?php echo esc_url($link);?>"><?php echo wp_kses_post($text);?></a> &nbsp; &nbsp; <a href="<?php echo esc_url($link1);?>"><?php echo wp_kses_post($text1);?></a> <br><a href="<?php echo esc_url($link2);?>"><?php echo wp_kses_post($text2);?></a></p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Info Section Two -->
<?php endif; ?>