    <div class="<?php echo esc_attr(wp_kses_post($class));?> sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side ">
                    <aside class="sidebar default-sidebar">
                        <!-- Search Box -->
                        <div class="sidebar-widget search-box">
                            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
							
                                <div class="form-group">
								
                                    <input type="text" name="s" value="" placeholder="<?php echo esc_attr(lodz_set($options, 'search_textx')); ?>">
									
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>  