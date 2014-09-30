<?php
/**
 * The template for displaying the featured slider on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, displays the latest posts.
 *
 * @package  WellThemes
 * @file     feat-slider.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 * 
 **/
?>
<?php		
	$cat_id = wt_get_option('wt_slider_category');	//get category id
	
	$args = array(
		'cat' => $cat_id,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'posts_per_page' => 4
	);
		
?>
<div id="wt-slider1">
<?php $query = new WP_Query( $args ); ?>
<?php if ( $query -> have_posts() ) : ?>
	<section class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides">
          <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
					
					<?php if ( has_post_thumbnail()) { ?>
            	<li>
  	    	   <a href="<?php the_permalink(); ?>" >
									<?php the_post_thumbnail( 'wt-slider-img', array('title' => '') ); ?>
								</a>
  	    		</li>
  	    <?php } ?>
						
				<?php endwhile; ?>
  	    		
          </ul>
        </div>
        <div id="carousel" class="flexslider list_slide">
          <ul class="slides">
          <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
						<?php if ( has_post_thumbnail()) { ?>
            <li>
  	    	    <a href="<?php the_permalink() ?>">
													<?php 
														//display only first 45 characters in the title.	
														$short_title = mb_substr(the_title('','',FALSE),0, 80);
														echo $short_title; 
														if (strlen($short_title) > 44){ 
															echo '...'; 
														} 
													?>	
												</a>		
  	    		</li>
  	    		<?php } ?>
					<?php endwhile; ?>
  	    	<div class="clear"></div>	
          </ul>
        </div>
      </section>
<?php endif;?>
<?php wp_reset_query();?>
<div class="clear"></div>
</div>

