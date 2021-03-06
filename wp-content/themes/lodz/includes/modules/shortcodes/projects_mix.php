<?php 
$paged = get_query_var('paged');
$args = array('post_type' => 'bunch-project', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);
$terms_array = explode(",",$exclude_cats);
if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'projects_category','field' => 'id','terms' => $terms_array,'operator' => 'NOT IN',));
$query = new WP_Query($args);

$t = $GLOBALS['_bunch_base'];

$data_filtration = '';
$data_posts = '';
?>

<?php if( $query->have_posts() ):

ob_start();?>

	<?php $count = 0; 
	$fliteration = array();?>
	<?php while( $query->have_posts() ): $query->the_post();
		global  $post;
		$meta = get_post_meta( get_the_id(), '_bunch_projects_meta', true );//printr($meta);
		$meta1 = _WSH()->get_meta();
		$post_terms = get_the_terms( get_the_id(), 'projects_category');// printr($post_terms); exit();
		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;
		$temp_category = get_the_term_list(get_the_id(), 'projects_category', '', ', ');
	?>
		<?php $post_terms = wp_get_post_terms( get_the_id(), 'projects_category'); 
		$term_slug = '';
		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		
           
            <?php 
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		    ?> 
			 <?php if( $style1 == '1' ): ?>
			 <!--Default Portfolio Item-->
                <?php  if( wp_kses_post(lodz_set($meta1, 'bigcolumn'))) : ?>
	<div class="gallery-item masonry-item big-column all  <?php echo esc_attr($term_slug); ?>">
	<?php else : ?>
	<div class="gallery-item masonry-item small-column all <?php echo esc_attr($term_slug); ?>">
	<?php endif;?>
                    <div class="inner-box">
                        <div class="image-box">
                           <?php the_post_thumbnail(); ?>
                            <div class="overlay-box">
                                <div class="content">
                                    <a href="<?php echo esc_url(lodz_set($meta1, 'meta_link')); ?>" data-fancybox="gallery"><span class="icon flaticon-unlink-1"></span></a>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			 <?php endif; ?>
			 <?php if( $style1 == '2' ): ?>
			 
			 <?php  if( wp_kses_post(lodz_set($meta1, 'bigcolumn'))) : ?>
	<div class="gallery-item masonry-item big-column all <?php echo esc_attr($term_slug); ?>">
	<?php else : ?>
	<div class="gallery-item masonry-item small-column all <?php echo esc_attr($term_slug); ?>">
	<?php endif;?>
                    <div class="inner-box">
                        <div class="image-box">
                           <?php the_post_thumbnail(); ?>
                            <div class="overlay-box">
                                <div class="content">
                                    <a href="<?php echo esc_url(lodz_set($meta1, 'meta_link')); ?>" data-fancybox="gallery"><span class="icon flaticon-unlink-1"></span></a>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			 <?php endif; ?>
			 <?php if( $style1 == '3' ): ?>
			 <div class="gallery-item-two mix all col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12 <?php echo esc_attr($term_slug); ?>">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="<?php echo esc_url(lodz_set($meta1, 'meta_link')); ?>" data-fancybox="gallery"><?php the_post_thumbnail(); ?></a>
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="<?php echo esc_url(lodz_set($meta1, 'meta_link')); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			 <?php endif; ?>
			 
<?php endwhile;?>
  
<?php wp_reset_postdata();
$data_posts = ob_get_contents();
ob_end_clean();

endif ;
ob_start();?>	 

<?php $terms = get_terms(array('projects_category')); ?>

<?php if( $style1 == '1' ): ?>
    <!--Gallery Full Width Section-->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> gallery-full-width">
        <!--Sortable Masonry-->
        <div class="sortable-masonry">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="sec-title light">
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($title);?></h2>
                    </div>

                    <!--Filter-->
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter=".all"><?php esc_attr_e('All', 'lodz');?></li>
                            
							<?php foreach( $fliteration as $t ): ?>
							
							<li class="filter" data-role="button" data-filter=".<?php echo esc_attr(lodz_set( $t, 'slug' )); ?>"><?php echo wp_kses_post(lodz_set( $t, 'name')); ?></li>
                           
						   <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="items-container clearfix">
          <?php echo wp_kses_post($data_posts); ?>
            </div>
        </div>
    </section>
    <!--End Gallery Section -->

<?php endif; ?>
<?php if( $style1 == '2' ): ?>
  <!--Gallery Full Width Section-->
    <section class="<?php echo esc_attr(wp_kses_post($class));?> gallery-full-width alternate">
        <!--Sortable Masonry-->
        <div class="sortable-masonry">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="sec-title">
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($title);?></h2>
                    </div>

                    <!--Filter-->
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter=".all"><?php esc_attr_e('All', 'lodz');?></li>
                            
							<?php foreach( $fliteration as $t ): ?>
							
							<li class="filter" data-role="button" data-filter=".<?php echo esc_attr(lodz_set( $t, 'slug' )); ?>"><?php echo wp_kses_post(lodz_set( $t, 'name')); ?></li>
                           
						    <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="items-container clearfix">
           <?php echo wp_kses_post($data_posts); ?>
            </div>
        </div>
    </section>
    <!--End Gallery Section -->

<?php endif; ?>
<?php if( $style1 == '3' ): ?>
 <!-- Gallery Section -->
    <section class="<?php echo esc_attr(wp_kses_post($class));?>  gallery-section">
        <div class="auto-container">
             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="inner-container clearfix">
                    <div class="sec-title">
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($title);?></h2>
                    </div>

                    <!--Filter-->
                    <div class="filters text-center clearfix">                     
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter="all"><?php esc_attr_e('All', 'lodz');?></li>
                            
							<?php foreach( $fliteration as $t ): ?>
							
							<li class="filter" data-role="button" data-filter=".<?php echo esc_attr(lodz_set( $t, 'slug' )); ?>"><?php echo wp_kses_post(lodz_set( $t, 'name')); ?></li>
                            
							<?php endforeach;?>
                        </ul>
                    </div>
                </div>

                <div class="filter-list row clearfix">
                  <?php echo wp_kses_post($data_posts); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->
<?php endif; ?>