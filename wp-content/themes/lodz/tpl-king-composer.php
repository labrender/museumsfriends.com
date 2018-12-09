<?php /* Template Name: King Composer Page */
	get_header() ;
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$header = lodz_set($meta, 'meta_breadcrumb_style'); 
	$header = (lodz_set($_GET, 'meta_breadcrumb_style')) ? lodz_set($_GET, 'meta_breadcrumb_style') : $header;
	  switch($header){
	  	case "2":
			get_template_part('includes/modules/bread/bread_v2');
			break;
		default:
			get_template_part('includes/modules/bread/bread_v1');
		}
?>

<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>	
<?php endwhile;  ?>

<?php get_footer() ; ?>