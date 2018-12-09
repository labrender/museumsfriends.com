<?php $options = get_option('lodz'.'_theme_options');?>

 <!-- Main Footer -->
    <footer class="<?php echo wp_kses_post(lodz_set($options, 'footerclass')); ?> main-footer" <?php if(lodz_set($options, 'footerbg')): ?> style="background-image:url('<?php echo esc_url(lodz_set($options, 'footerbg')); ?>');"<?php endif ; ?> >
        <?php if ( is_active_sidebar( 'footer-sidebar' ) ): ?>
         <div class="auto-container">
		<div class="widgets-section">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar' );?>
                </div>
            </div>
        </div>
        <?php endif;?>
	<?php if((lodz_set($options, 'bottom_footer_show'))):?> 
       <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
               <?php if(lodz_set($options, 'copy_show')):?>
			   <div class="copyright-text clearfix">
                    <p><?php echo wp_kses_post(lodz_set($options, 'copy_right')); ?></p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="contact-link"><?php echo wp_kses_post(lodz_set($options, 'footer_email')); ?></a>
                </div>
				<?php endif;?>
            </div>
        </div>
		<?php endif;?>
    </footer>
    <!-- End Main Footer -->

	
<!--End pagewrapper-->
</div>
</div></div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?php wp_footer(); ?>
</body>
</html>