<?php
/* =============== 
Widget Team
Recent Post-1
Recent Post-2
Recent Post-3
Theme Gallery
Services Menu
Testimonials
Call Us
Our Brochures
About Us
Contact Us
Subscribe
About Us With Social Icon
Call to Action
Contact Us-2
================*/

/*==============Team=============*/

class lodz_Team extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Team', /* Name */esc_html__('Theme Sidebar Team','lodz'), array( 'description' => esc_html__('Show the Sidebar Team', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$options = _WSH()->option();
		echo wp_kses_post($before_widget); ?>
      		
		
			<div class="about-widget">
			<div class="image">
				<img src="<?php echo esc_url($instance['logo_image']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>">
			</div>
			<h3><?php echo wp_kses_post($instance['content1']); ?></h3>
			<div class="text"><?php echo wp_kses_post($instance['content']); ?></div>
			<div class="socail-box">
				<a href="<?php echo esc_url($instance['link1']); ?>"><span class="fa fa-facebook"></span></a>
				<a href="<?php echo esc_url($instance['link2']); ?>"><span class="fa fa-twitter"></span></a>
				<a href="<?php echo esc_url($instance['link3']); ?>"><span class="fa fa-instagram"></span></a>
				<a href="<?php echo esc_url($instance['link4']); ?>"><span class="fa fa-youtube-play"></span></a>
				<a href="<?php echo esc_url($instance['link5']); ?>"><span class="fa fa-google"></span></a>
			</div>
		</div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['logo_image'] = $new_instance['logo_image'];
		$instance['content'] = $new_instance['content'];
		$instance['content1'] = $new_instance['content1'];
		$instance['link1'] = $new_instance['link1'];
		$instance['link2'] = $new_instance['link2'];
		$instance['link3'] = $new_instance['link3'];
		$instance['link4'] = $new_instance['link4'];
		$instance['link5'] = $new_instance['link5'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$logo_image = ( $instance ) ? esc_attr($instance['logo_image']) : get_template_directory_uri().'/images/logo.png';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$content1 = ($instance) ? esc_attr($instance['content1']) : '';
		$link1 = ($instance) ? esc_attr($instance['link1']) : '';
		$link2 = ($instance) ? esc_attr($instance['link2']) : '';
		$link3 = ($instance) ? esc_attr($instance['link3']) : '';
		$link4 = ($instance) ? esc_attr($instance['link4']) : '';
		$link5 = ($instance) ? esc_attr($instance['link5']) : '';
		
		
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo_image')); ?>"><?php esc_html_e('Image:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('images', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo_image')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_image')); ?>" type="text" value="<?php echo esc_attr($logo_image); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content1')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content1')); ?>" name="<?php echo esc_attr($this->get_field_name('content1')); ?>" ><?php echo wp_kses_post($content1); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link1')); ?>"><?php esc_html_e('Link-1:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link1')); ?>" name="<?php echo esc_attr($this->get_field_name('link1')); ?>" ><?php echo wp_kses_post($link1); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link2')); ?>"><?php esc_html_e('Link-2:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link2')); ?>" name="<?php echo esc_attr($this->get_field_name('link2')); ?>" ><?php echo wp_kses_post($link2); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link3')); ?>"><?php esc_html_e('Link-3:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link3')); ?>" name="<?php echo esc_attr($this->get_field_name('link3')); ?>" ><?php echo wp_kses_post($link3); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link4')); ?>"><?php esc_html_e('Link-4:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link4')); ?>" name="<?php echo esc_attr($this->get_field_name('link4')); ?>" ><?php echo wp_kses_post($link4); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link5')); ?>"><?php esc_html_e('Link-5:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link5')); ?>" name="<?php echo esc_attr($this->get_field_name('link5')); ?>" ><?php echo wp_kses_post($link5); ?></textarea>
        </p>
      
        
                
		<?php 
	}
	
}

/*==============About Us=============*/

class lodz_Clients extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Clients', /* Name */esc_html__('Theme Clients','lodz'), array( 'description' => esc_html__('Show the Clients company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$options = _WSH()->option();
		echo wp_kses_post($before_widget); ?>
      		<div class="sidebar-widget clients">
                 <?php echo wp_kses_post($before_title.$title.$after_title); ?>
		<div class="clients-area clearfix">
			<div class="client-block">
				<a href="#"><img src="<?php echo esc_url($instance['logo_image']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>"></a>
			</div>

			<div class="client-block">
				<a href="#"><img src="<?php echo esc_url($instance['logo_image1']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>"></a>
			</div>

			<div class="client-block">
				<a href="#"><img src="<?php echo esc_url($instance['logo_image2']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>"></a>
			</div>

			<div class="client-block">
				<a href="#"><img src="<?php echo esc_url($instance['logo_image3']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>"></a>
			</div>
		</div>
	</div>
            
			
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{   $instance['title'] = strip_tags($new_instance['title']);
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['logo_image'] = $new_instance['logo_image'];
		$instance['logo_image1'] = $new_instance['logo_image1'];
		$instance['logo_image2'] = $new_instance['logo_image2'];
		$instance['logo_image3'] = $new_instance['logo_image3'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{   $title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Our Clients', 'lodz');
		$logo_image = ( $instance ) ? esc_attr($instance['logo_image']) : get_template_directory_uri().'/images/logo-footer.png';
		$logo_image1 = ( $instance ) ? esc_attr($instance['logo_image1']) : get_template_directory_uri().'/images/logo-footer.png';
		$logo_image2 = ( $instance ) ? esc_attr($instance['logo_image2']) : get_template_directory_uri().'/images/logo-footer.png';
		$logo_image3 = ( $instance ) ? esc_attr($instance['logo_image3']) : get_template_directory_uri().'/images/logo-footer.png';
		
		?>
        
         <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('logo_image')); ?>"><?php esc_html_e('Logo Image:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('images', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo_image')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_image')); ?>" type="text" value="<?php echo esc_attr($logo_image); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('logo_image1')); ?>"><?php esc_html_e('Logo Image:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('Link', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo_image1')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_image1')); ?>" type="text" value="<?php echo esc_attr($logo_image1); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('logo_image2')); ?>"><?php esc_html_e('Logo Image:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('link', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo_image2')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_image2')); ?>" type="text" value="<?php echo esc_attr($logo_image2); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('logo_image3')); ?>"><?php esc_html_e('Logo Image:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('link', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo_image3')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_image3')); ?>" type="text" value="<?php echo esc_attr($logo_image3); ?>" />
        </p>
        
                
		<?php 
	}
	
}

/*===============Theme Gallery=============*/
class lodz_Gallery extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Gallery', /* Name */esc_html__('Theme Gallery','lodz'), array( 'description' => esc_html__('Show the Gallery images', 'lodz' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
		<div class="gallery-widget">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            
			<?php 
				$args = array('post_type' => 'bunch-gallery', 'showposts'=>$instance['number']);
				if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'gallery_category','field' => 'id','terms' => (array)$instance['cat']));
				$this->posts($args);
				?>
        </div>
        
        <?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Gallery Widget', 'lodz');
		$number = ( $instance ) ? esc_attr($instance['number']) : 8;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'lodz'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'lodz'), 'selected'=>$cat, 'taxonomy' => 'gallery_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($args)
	{
	?>	
		<div class="widget-content">
                <div class="images-outer clearfix">
		<?php	$query = new WP_Query($args);
		if( $query->have_posts() ):
		while( $query->have_posts() ): $query->the_post();
		global $post;
		$gallery_meta = _WSH()->get_meta(); 
		$post_thumbnail_id = get_post_thumbnail_id($post->ID);
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		?>
				
                    <figure class="image-box gallery_widget"><a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image" title="<?php esc_attr_e('Image Title Here', 'lodz');?>" data-fancybox-group="footer-gallery">
					<?php the_post_thumbnail();?></a></figure>
                <?php endwhile; endif;
		wp_reset_postdata(); ?>
		
                </div> 
			</div>
        <?php 
    }
}


/* ===============Recent Post-1========= */
class lodz_RecentNews1 extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_RecentNews1', /* Name */esc_html__('Theme News-1','lodz'), array( 'description' => esc_html__('Show the recent news sidebar', 'lodz' )) );
	}
	
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
        <!-- Popular Posts -->
        <div class="popular-posts">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            
            <?php $query_string = 'posts_per_page='.$instance['number'];
			if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
			 
			$this->posts($query_string);  
			?>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Recent News', 'lodz');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : ''; ?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'lodz'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'lodz'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		$query = new WP_Query($query_string);
		if( $query->have_posts() ):?>
            <!-- Title -->
            <?php while( $query->have_posts() ): $query->the_post(); ?>
            <article class="post">
                <figure class="post-thumb"><a href="<?php echo esc_url(get_permalink(get_the_id())); ?>"><?php the_post_thumbnail('lodz_81x75'); ?></a></figure>
                <div class="text"><a href="<?php echo esc_url(get_permalink(get_the_id())); ?>"><?php the_title(); ?></a></div>
                <div class="post-info"><?php echo get_the_date('d M, Y'); ?></div>
            </article>
            <?php endwhile;
		endif;
		wp_reset_postdata();
    }
}
/* ===============Recent Post-2========= */
class lodz_RecentNews2 extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_RecentNews2', /* Name */esc_html__('Theme News-2','lodz'), array( 'description' => esc_html__('Show the recent news sidebar', 'lodz' )) );
	}
	
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
		
        <!-- Popular Posts -->
		<div class="footer-widget posts-widget popular-posts">
		<div class="posts">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            
            <?php $query_string = 'posts_per_page='.$instance['number'];
			if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
			 
			$this->posts($query_string);  
			?>
			</div>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Recent News', 'lodz');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : ''; ?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'lodz'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'lodz'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		$query = new WP_Query($query_string);
		if( $query->have_posts() ):?>
            <!-- Title -->
            <?php while( $query->have_posts() ): $query->the_post(); ?>
             <div class="post">
				<figure class="post-thumb">
					 <?php the_post_thumbnail('lodz_55x55'); ?>
					<a href="<?php echo esc_url(get_permalink(get_the_id())); ?>" class="overlay-link">
						<span class="fa fa-link"></span>
					</a>
				</figure>
				<div class="desc-text">
					<a href="<?php echo esc_url(get_permalink(get_the_id())); ?>"><?php the_title(); ?></a>
				</div>
				<div class="info"><i class="fa fa-user"></i><?php esc_html_e('By: ', 'lodz');?><span><?php the_author();?></span></div>
			</div>
            <?php endwhile;
		endif;
		wp_reset_postdata();
    }
}
/* ===============Recent Post-3========= */

class lodz_RecentNews3 extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_RecentNews3', /* Name */esc_html__('Theme News-3','lodz'), array( 'description' => esc_html__('Show the recent news sidebar', 'lodz' )) );
	}
	
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
	
	   <!-- Popular Posts -->
         <div class="sidebar-widget latest-news">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            
            <?php $query_string = 'posts_per_page='.$instance['number'];
			if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
			 
			$this->posts($query_string);  
			?>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Recent News', 'lodz');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : ''; ?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'lodz'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'lodz'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		$query = new WP_Query($query_string);
		if( $query->have_posts() ):?>
            <!-- Title -->
        <div class="widget-content">   
		   <?php while( $query->have_posts() ): $query->the_post(); ?>
			<article class="post">
				<h3><a href="<?php echo esc_url(get_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
				<div class="post-info"><?php the_date();?></div>
			</article>
            <?php endwhile; ?>
			</div>
		<?php 	
		endif;
		wp_reset_postdata();
    }
}



/*==============Services Menu=============*/

class lodz_ServicesMenu extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_ServicesMenu', /* Name */esc_html__('Theme Services Menu','lodz'), array( 'description' => esc_html__('Show services menu in sidebar.', 'lodz' )) );
	}
	
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		echo wp_kses_post($before_widget); ?>
        
        <!-- Sidebar Category -->
        <div class="sidebar-widget sidebar-category">
            <ul class="list">
                <?php $args = array('post_type' => 'bunch_services', 'showposts'=>$instance['number']);
				if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'services_category','field' => 'id','terms' => (array)$instance['cat']));
				 
				$this->posts($args);
				?>
            </ul>
        </div>
        
        <?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$number = ( $instance ) ? esc_attr($instance['number']) : 6;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : ''; ?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'lodz'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'lodz'), 'selected'=>$cat, 'taxonomy' => 'services_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($args)
	{
		$query = new WP_Query($args);
		if( $query->have_posts() ):
		while( $query->have_posts() ): $query->the_post();
		$services_meta = _WSH()->get_meta(); ?>
        <li><a href="<?php echo esc_url(lodz_set($services_meta, 'ext_url')); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; endif;
		wp_reset_postdata();
    }
}
/*==============Testimonials=============*/
class lodz_Testimonials extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Testimonials', /* Name */esc_html__('Theme Testimonials','lodz'), array( 'description' => esc_html__('Show the testimonials sidebar', 'lodz' )) );
	}
	
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
        
        <!-- Sidebar Testimonial -->
        <div class="sidebar-widget sidebar-testimonial">
            <div class="single-item-carousel owl-carousel owl-theme">
                <?php $args = array('post_type' => 'bunch_testimonials', 'showposts'=>$instance['number']);
				if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'testimonials_category','field' => 'id','terms' => (array)$instance['cat']));
				 
				$this->posts($args);
				?>
            </div>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : ''; ?>
		
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'lodz'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'lodz'), 'selected'=>$cat, 'taxonomy' => 'testimonials_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($args)
	{
		
		$query = new WP_Query($args); 
		if( $query->have_posts() ):?>
            <!-- Title -->
            <?php while( $query->have_posts() ): $query->the_post();
			global $post;
			$testimonials_meta = _WSH()->get_meta(); ?>
            <!--Testimonial Slide-->
            <div class="testimonial-slide">
                <div class="inner">
                    <div class="author-info">
                        <div class="image">
                            <?php the_post_thumbnail('lodz_55x55'); ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="designation"><?php echo wp_kses_post(lodz_set($testimonials_meta, 'designation')); ?></div>
                    </div>
                    <div class="text"><?php echo get_the_content(); ?></div>
                </div>
            </div>
            <?php endwhile;
		endif;
		wp_reset_postdata();
    }
}
/*==============Call Us=============*/

class lodz_CallUs extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_CallUs', /* Name */esc_html__('Theme Call Us','lodz'), array( 'description' => esc_html__('Show the information about company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$options = _WSH()->option();
		echo wp_kses_post($before_widget); ?>
        
        	<!-- Sidebar Question Box -->
            <div class="sidebar-widget sidebar-question">
                <div class="info-widget">
                    <div class="inner">
                        <h3><?php echo wp_kses_post($instance['content']); ?></h3>
                        <h2><?php echo wp_kses_post($instance['phone']); ?></h2>
                        <a href="<?php echo esc_url($instance['url']); ?>" class="more-detail"><?php esc_html_e('More Details', 'lodz'); ?></a>
                    </div>
                </div>
            </div>
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['content'] = $new_instance['content'];
		$instance['phone'] = $new_instance['phone'];
		$instance['url'] = $new_instance['url'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$content = ( $instance ) ? esc_attr($instance['content']) : 'Have Any Question <br> Call Us Now';
		$phone = ( $instance ) ? esc_attr($instance['phone']) : '+880 456 334 345';
		$url = ( $instance ) ? esc_attr($instance['url']) : '#';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('phone', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('url')); ?>"><?php esc_html_e('Link here:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('link', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('url')); ?>" name="<?php echo esc_attr($this->get_field_name('url')); ?>" type="text" value="<?php echo esc_attr($url); ?>" />
        </p>
            
		<?php 
	}
	
}
/*==============Our Brochures=============*/

class lodz_Brochures extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Brochures', /* Name */esc_html__('Theme Brochures','lodz'), array( 'description' => esc_html__('Show the info Our Brochures', 'lodz' )) );
	}
	
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget); ?>
        	
            <!-- Sidebar brochure-->
            <div class="sidebar-widget sidebar-brochure">
                <a class="brochure" href="<?php echo esc_url($instance['pdf']); ?>"><span class="icon flaticon-pdf"></span> <?php esc_html_e('DetailsBrochure.pdf', 'lodz'); ?></a>
            </div>
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['pdf'] = $new_instance['pdf'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$pdf = ( $instance ) ? esc_attr($instance['pdf']) : '#';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('pdf')); ?>"><?php esc_html_e('PDF Link:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('PDF link', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('pdf')); ?>" name="<?php echo esc_attr($this->get_field_name('pdf')); ?>" type="text" value="<?php echo esc_attr($pdf); ?>" />
        </p>
        
		<?php 
	}
	
}
/*==============About Us=============*/

class lodz_AboutUs extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_AboutUs', /* Name */esc_html__('Theme About & Subscribe','lodz'), array( 'description' => esc_html__('Show the information about company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$options = _WSH()->option();
		echo wp_kses_post($before_widget); ?>
      		<div class="footer-widget logo-widget">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($instance['logo_image']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>"></a>
				</div>
				<div class="text"><?php echo wp_kses_post($instance['content']); ?></div>
			</div>
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['logo_image'] = $new_instance['logo_image'];
		$instance['content'] = $new_instance['content'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$logo_image = ( $instance ) ? esc_attr($instance['logo_image']) : get_template_directory_uri().'/images/logo-footer.png';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo_image')); ?>"><?php esc_html_e('Logo Image:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('images', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo_image')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_image')); ?>" type="text" value="<?php echo esc_attr($logo_image); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        
                
		<?php 
	}
	
}

/*============== Subscribe & Social=============*/

class lodz_subscribesocial extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_subscribesocial', /* Name */esc_html__('Theme Subscribe & Social','lodz'), array( 'description' => esc_html__('Show the information about company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$options = _WSH()->option();
		echo wp_kses_post($before_widget); ?>

			 <div class="footer-widget newsletter-widget">
				 <?php echo wp_kses_post($before_title.$title.$after_title); ?>
				<div class="newsletter-form">
				  <form action="http://feedburner.google.com/fb/a/mailverify">
						<div class="form-group">
							<input type="hidden" id="uri2" name="uri" value="<?php echo esc_url($instance['id']); ?>">
			<input type="email" name="email" placeholder="<?php esc_attr_e('e-mail', 'lodz');?>">
						</div>
						<div class="form-group">
							<button type="submit" class="theme-btn btn-style-one"><?php esc_attr(esc_html_e('Subscribe', 'lodz')); ?></button>
						</div>
					</form>
				</div>
                                   
<?php if( $instance['show'] ):
					if(lodz_set($options, 'head_social')):
					if(lodz_set( $options, 'social_media' ) && is_array( lodz_set( $options, 'social_media' ) )): ?>
                   <ul class="social-icon-one">
                    	<?php $social_icons = lodz_set( $options, 'social_media' );
						foreach( lodz_set( $social_icons, 'social_media' ) as $social_icon ):
						if( isset( $social_icon['tocopy' ] ) ) continue; ?>
						<li><a href="<?php echo esc_url(lodz_set( $social_icon, 'social_link')); ?>" target="_blank"><span class="fa <?php echo esc_attr(lodz_set( $social_icon, 'social_icon')); ?>"></span></a></li>
						<?php endforeach; ?>
                    </ul>
                    <?php endif; endif; endif; ?>

                  </div>
            
			
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['id'] = $new_instance['id'];
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : 'Subscribe';
		$id = ($instance) ? esc_attr($instance['id']) : '#';
		$show = ($instance) ? esc_attr($instance['show']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('Title', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('id')); ?>"><?php esc_html_e('Newsletter ID:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('Subscribe', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('id')); ?>" name="<?php echo esc_attr($this->get_field_name('id')); ?>" type="text" value="<?php echo esc_attr($id); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Newsletter ID Show/Hide:', 'lodz'); ?></label>
   			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>
                
		<?php 
	}
	
}

/*==============Contact Us=============*/

class lodz_ContactUs extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_ContactUs', /* Name */esc_html__('Theme Contact Us','lodz'), array( 'description' => esc_html__('Show the information about company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$options = _WSH()->option();
		echo wp_kses_post($before_widget); ?>
        
        	<div class="contact-widget">
                <?php echo wp_kses_post($before_title.$title.$after_title); ?>
                <div class="widget-content">
					<ul class="contact-info-list">
						<li><i class="flaticon-phone-auricular-with-high-volume"></i><?php echo wp_kses_post($instance['phone']); ?></li>
						<li><i class="flaticon-map-marker-1"></i><?php echo wp_kses_post($instance['address']); ?></li>
						<li><i class="flaticon-black"></i><?php echo sanitize_email($instance['email']); ?></li>
					</ul>

					<?php if( $instance['show'] ):
					
					if(lodz_set( $options, 'social_media' ) && is_array( lodz_set( $options, 'social_media' ) )): ?>
                    <ul class="social-icon-two">
                    	<?php $social_icons = lodz_set( $options, 'social_media' );
						foreach( lodz_set( $social_icons, 'social_media' ) as $social_icon ):
						if( isset( $social_icon['tocopy' ] ) ) continue; ?>
						<li><a href="<?php echo esc_url(lodz_set( $social_icon, 'social_link')); ?>" target="_blank"><span class="fa <?php echo esc_attr(lodz_set( $social_icon, 'social_icon')); ?>"></span></a></li>
						<?php endforeach; ?>
                    </ul>
                    <?php endif; endif; ?>

					<span class="icon icon-heart"></span>
				</div> 
            </div>
            
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['address'] = $new_instance['address'];
		$instance['phone'] = $new_instance['phone'];
		$instance['email'] = $new_instance['email'];
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : 'Our Address';
		$address = ( $instance ) ? esc_attr($instance['address']) : '60 Grant Ave. Central New Road 0708, UK';
		$phone = ( $instance ) ? esc_attr($instance['phone']) : '+880 1723 801 729';
		$email = ( $instance ) ? esc_attr($instance['email']) : 'lodzco346@email.com';
		$show = ($instance) ? esc_attr($instance['show']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('title', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('Address', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($address); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('Phone', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('e-mail', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Social Icons Show/Hide:', 'lodz'); ?></label>
   			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>
                
		<?php 
	}
	
}

/*==============Subscribe=============*/

class lodz_Subscribeus extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Subscribeus', /* Name */esc_html__('Theme Subscribe Us','lodz'), array( 'description' => esc_html__('Show the information Subscribe company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
	
		<div class="sidebar-widget signup-box">
            <div class="inner-box">
			<?php echo wp_kses_post($before_title.$title.$after_title); ?>
			<?php if( $instance['show'] ): ?>	
			<div class="text"><?php echo wp_kses_post($instance['content']); ?></div>
			<?php endif; ?>	
			 <div class="emailed-form">
				<form target="popupwindow" method="post" role="form" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8" id="subscribe2" name="mc-embedded-subscribe-form" novalidate>
					<div class="form-group">
						<input type="text" name="email" id="newsletter_input2" placeholder="<?php esc_attr_e('e-mail', 'lodz');?>">
						<input type="hidden" id="uri2" name="uri" value="<?php echo wp_kses_post($id); ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="theme-btn"><?php esc_html_e('Subscribe', 'lodz');?></button>
					</div>
				</form>
			</div>
			
	</div></div>			
		

		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = $new_instance['content'];
		$instance['id'] = $new_instance['id'];
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : 'Subscribe';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$id = ($instance) ? esc_attr($instance['id']) : '#';
		$show = ( $instance ) ? esc_attr($instance['show']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('about', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('id')); ?>"><?php esc_html_e('ID:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('id')); ?>" name="<?php echo esc_attr($this->get_field_name('id')); ?>" ><?php echo wp_kses_post($id); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Show Text:', 'lodz'); ?></label>
			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>        
                
		<?php 
	}
	
}


/*=========About Us With Map ======*/
class lodz_Aboutus2 extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Aboutus2', /* Name */esc_html__('Theme About & Map','lodz'), array( 'description' => esc_html__('Show the information about company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      		
			 <div class="footer-about footer-colmun">
				<div class="footer-logo">
					<figure>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($instance['link']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>"></a>
					</figure>
				</div>
				<div class="text">
					<p><?php echo wp_kses_post($instance['content']); ?></p>
				</div>
				<figure>
					<img src="<?php echo esc_url($instance['link1']); ?>" alt="<?php esc_attr_e('images', 'lodz');?>">
				</figure>
			</div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = $new_instance['content'];
		$instance['link'] = $new_instance['link'];
		$instance['link1'] = $new_instance['link1'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : 'About Us';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$link = ($instance) ? esc_attr($instance['link']) : '';
		$show = ( $instance ) ? esc_attr($instance['show']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <input placeholder="<?php esc_attr_e('about', 'lodz');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_html_e('Image Link:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" ><?php echo wp_kses_post($link); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link1')); ?>"><?php esc_html_e('Map Image:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link1')); ?>" name="<?php echo esc_attr($this->get_field_name('link1')); ?>" ><?php echo wp_kses_post($link1); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
              
		<?php 
	}
	
}

/*=========About Us With Social Icon ======*/

class lodz_Aboutus3 extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Aboutus3', /* Name */esc_html__('Theme Social','lodz'), array( 'description' => esc_html__('Show the information about company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );

		
		echo wp_kses_post($before_widget);?>
      		
			<!--Footer Column-->
            <div class="sidebar-widget social-widget">
				<div class="inner-widget">
					<?php if( $instance['show'] ): ?>
					<ul class="social-icon-two">
						<?php echo wp_kses_post(lodz_bunch_get_social_icons()); ?>
					</ul>
					<?php endif; ?>	
				</div>
			</div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		
		$show = ( $instance ) ? esc_attr($instance['show']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Show Social Icons:', 'lodz'); ?></label>
			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>        
                
		<?php 
	}
	
}

/*=========Call to Action =============*/
class lodz_CalltoAction extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_CalltoAction', /* Name */esc_html__('Theme Call to Action','lodz'), array( 'description' => esc_html__('Show Call to Action', 'lodz' )) );
	}
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      <div class="sidebar-widget consultation">
		<div class="consult-box" style="background-image: url(<?php echo esc_url($instance['image']); ?>);">
			<h4><?php echo wp_kses_post($instance['content']); ?></h4>
			<p><?php echo wp_kses_post($instance['content1']); ?><?php echo wp_kses_post($instance['content2']); ?></p>
			<a href="<?php echo esc_url($instance['link']); ?>" class="theme-btn btn-style-one"><?php echo wp_kses_post($instance['button']); ?></a>
		</div>
	</div>
	
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['image'] = $new_instance['image'];
		$instance['content'] = $new_instance['content'];
	    $instance['content1'] = $new_instance['content1'];
		$instance['content2'] = $new_instance['content2'];
		$instance['button'] = $new_instance['button'];
		$instance['link'] = $new_instance['link'];
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : '';
		$image = ($instance) ? esc_attr($instance['image']) : '';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$content1 = ($instance) ? esc_attr($instance['content1']) : '';
		$content2 = ($instance) ? esc_attr($instance['content2']) : '';
		$button = ($instance) ? esc_attr($instance['button']) : '';
		$link = ($instance) ? esc_attr($instance['link']) : '';

		?>
       <p>
            <label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_html_e('Image Link:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" ><?php echo wp_kses_post($image); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('content1')); ?>"><?php esc_html_e('Content Two:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content1')); ?>" name="<?php echo esc_attr($this->get_field_name('content1')); ?>" ><?php echo wp_kses_post($content1); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('content2')); ?>"><?php esc_html_e('Content Three:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content2')); ?>" name="<?php echo esc_attr($this->get_field_name('content2')); ?>" ><?php echo wp_kses_post($content2); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('button')); ?>"><?php esc_html_e('Button:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('button')); ?>" name="<?php echo esc_attr($this->get_field_name('button')); ?>" ><?php echo wp_kses_post($button); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_html_e('Button Link:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('link')); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" ><?php echo wp_kses_post($link); ?></textarea>
        </p>
		
		
		<?php 
	}
	
}
/*===============Contact Us-2================*/
class lodz_ContactUs2 extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_ContactUs2', /* Name */esc_html__('Theme Contact Us-2','lodz'), array( 'description' => esc_html__('Show the Contact company', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
      	
		<!--Contact Info Widget-->
		<div class="sidebar-widget contact-info-widget-two">
			<div class="inner-content">
				<div class="icon-box">
					<span class="icon flaticon-telephone"></span>
				</div>
				<div class="text"><?php echo wp_kses_post($instance['content']); ?></div>
				<div class="number"><?php echo wp_kses_post($instance['content1']); ?></div>
				<div class="email"><?php echo wp_kses_post($instance['content2']); ?></div>
			</div>
		</div>
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = $new_instance['content'];
	    $instance['content1'] = $new_instance['content1'];
		$instance['content2'] = $new_instance['content2'];
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : '';
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$content1 = ($instance) ? esc_attr($instance['content1']) : '';
		$content2 = ($instance) ? esc_attr($instance['content2']) : '';

		?>
       
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('content1')); ?>"><?php esc_html_e('Content Two:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content1')); ?>" name="<?php echo esc_attr($this->get_field_name('content1')); ?>" ><?php echo wp_kses_post($content1); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('content2')); ?>"><?php esc_html_e('Content Three:', 'lodz'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content2')); ?>" name="<?php echo esc_attr($this->get_field_name('content2')); ?>" ><?php echo wp_kses_post($content2); ?></textarea>
        </p>
		<?php 
	}
	
}




// twitter
class lodz_Twitter extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Twitter', /* Name */esc_html__('Theme Tweets','lodz'), array( 'description' => esc_html__('Grab the latest tweets from twitter', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
		
        
		<?php echo wp_kses_post($before_title.$title.$after_title); ?>
		<?php $number = (lodz_set($instance, 'number') ) ? esc_attr(lodz_set($instance, 'number')) : 2; ?>

		<script type="text/javascript"> jQuery(document).ready(function($) {$('#twitter_update').tweets({screen_name: '<?php echo esc_js($instance['twitter_id']); ?>', number: <?php echo esc_js($number); ?>});});</script>
		
		<ul id="twitter_update" class="twitter_feed"></ul>
        
		
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['twitter_id'] = $new_instance['twitter_id'];
		$instance['number'] = $new_instance['number'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : esc_html__('Twitter Feed', 'lodz');
		$twitter_id = ($instance) ? esc_attr($instance['twitter_id']) : 'wordpress';
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter_id')); ?>"><?php esc_html_e('Twitter ID:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter_id')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter_id')); ?>" type="text" value="<?php echo esc_attr($twitter_id); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of Tweets:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" />
        </p>
                
		<?php 
	}
}


// twitter
class lodz_Twitter_Twitter extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'lodz_Twitter_Twitter', /* Name */esc_html__('Theme Tweets','lodz'), array( 'description' => esc_html__('Grab the latest tweets from twitter', 'lodz' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo wp_kses_post($before_widget);?>
		
        
		<?php echo wp_kses_post($before_title.$title.$after_title); ?>
		<?php $number = (lodz_set($instance, 'number') ) ? esc_attr(lodz_set($instance, 'number')) : 2; ?>

		<script type="text/javascript"> jQuery(document).ready(function($) {$('#twitter_update').tweets({screen_name: '<?php echo esc_js($instance['twitter_id']); ?>', number: <?php echo esc_js($number); ?>});});</script>
		
		<ul id="twitter_update" class="twitter_feed"></ul>
        
		
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['twitter_id'] = $new_instance['twitter_id'];
		$instance['number'] = $new_instance['number'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : esc_html__('Twitter Feed', 'lodz');
		$twitter_id = ($instance) ? esc_attr($instance['twitter_id']) : 'wordpress';
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter_id')); ?>"><?php esc_html_e('Twitter ID:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter_id')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter_id')); ?>" type="text" value="<?php echo esc_attr($twitter_id); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of Tweets:', 'lodz'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" />
        </p>
                
		<?php 
	}
}