<?php $options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
lodz_bunch_global_variable(); ?>

<div class="header_one">
   <!-- Main Header-->
    <header class="main-header">
        <!-- Main Box -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo col-md-3">
						<?php if(lodz_set($options, 'logo')): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(lodz_set($options, 'logo')); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>" title="<?php esc_attr_e('Image', 'lodz');?>"></a>
                        <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
                        <?php endif; ?>
						</div>
						<div class="logo_text col-md-9">
							<p>
								World Federation of Friends of Museums<br/>
								Federación Mundial de Amigos de los Museos<br/>
								Fédération Mondiale des Amis des Musées 
							</p>
						</div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
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

                        </nav>
                        <!-- Main Menu End-->
                       <?php if(lodz_set($options, 'header_search_show')):?>
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <!--Search Box-->
                            <div class="dropdown dropdown-outer">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                     
									<li class="panel-outer">
                                        <div class="form-container">
                                          <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
                                                <div class="form-group">
                                                    <input type="text" name="s" value="" placeholder="<?php echo esc_attr(lodz_set($options, 'search_textx')); ?>">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
									
                                </ul>
                            </div>
							
                        </div><!--End earch Box-->
						<?php endif ; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
			   <?php if(lodz_set($options, 'logosmall')):?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="img-responsive"><img src="<?php echo esc_url(lodz_set($options, 'logosmall')); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>" title="<?php esc_attr_e('Logo', 'lodz');?>"></a>
            	<?php else:?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="img-responsive"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-small.png'); ?>" alt="<?php esc_attr_e('Image', 'lodz');?>"></a>
            	<?php endif; ?>	
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse collapse clearfix">
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
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->