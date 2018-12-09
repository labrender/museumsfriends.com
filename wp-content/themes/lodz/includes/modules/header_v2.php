<?php $options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
lodz_bunch_global_variable(); ?>

<div class="has-side-nav header_two">

     <!-- Hidden Navigation Bar -->
    <section class="hidden-bar left-align">
        <!-- Hidden Nav Toggler -->
        <div class="nav-toggler">
            <button class="hidden-bar-opener"><span class="icon flaticon-menu-options"></span></button>
        </div>
        <!-- / Hidden Nav Toggler -->
        
        <div class="hidden-bar-closer">
            <button><span class="flaticon-cancel"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            <!--Logo-->
            <div class="logo-box">
			<?php if(lodz_set($options, 'logo')): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(lodz_set($options, 'logo')); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>" title="<?php esc_attr_e('Image', 'lodz');?>"></a>
                        <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                        <?php endif; ?>
						</div>
            
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!--navigation-->
<?php 
	  $header = lodz_set($meta, 'meta_menu_style'); 
	 
	  $header = (lodz_set($_GET, 'meta_menu_style')) ? lodz_set($_GET, 'meta_menu_style') : $header;
	  switch($header){
	  	case "2":
			get_template_part('includes/modules/bread/menu2');
			break;
		default:
			get_template_part('includes/modules/bread/menu1');
		}
?>
            </div>
            <!-- /.Side-menu -->
            
        </div><!-- / Hidden Bar Wrapper -->
        
     	<!--Social Links-->
        <ul class="social-links clearfix">
            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
       <?php if(lodz_set($options, 'header_search_show')):?> 
        <!-- Search Box -->
        <div class="search-box">
           <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
                <div class="form-group">
                    <input type="text" name="s" value="" placeholder="<?php echo esc_attr(lodz_set($options, 'search_textx')); ?>">
                    <button type="submit"><span class="fa fa-search"></span></button>
                </div>
            </form>
        </div>
       <?php endif ; ?> 
    </section>
    <!-- End / Hidden Bar -->