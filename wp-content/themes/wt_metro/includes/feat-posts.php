<?php
/**
 * The template for displaying the featured posts on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, does not display.
 *
 * @package  WellThemes
 * @file     feat-posts2.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 *
 */
?>
<?php	
	$cat_id = wt_get_option('wt_feat_posts_cat');		//number of posts
	$cat_name = get_cat_name($cat_id);					//get category name
	$cat_url = get_category_link($cat_id );				//get category url	
?>

<div id="feat-posts">
	<!--<header class="cat-header">	
		<?php
			#if ($cat_id == 0 ) {	?>								
				<h3> <?php# _e('Latest Posts', 'wellthemes'); ?></h3>	
				<a class="rss" href="<?php# bloginfo('rss2_url'); ?>" >RSS</a>
			<?php					
			#} else {													
				?>
				<h3><a href="<?php# echo esc_url( $cat_url ); ?>" ><?php# echo $cat_name; ?></a></h3>	
				<a class="rss" href="<?php# home_url(); ?>?cat=<?php# echo $cat_id; ?>&feed=rss2" >RSS</a>
				<?php
			#}
		?>
	</header>-->
	
	<?php
		$limit = get_option('posts_per_page');
		//$paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
		$paged = get_query_var('page') ? get_query_var('page') : 1;
		#$limit = 1; $paged = 4;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);
		#query_posts('showposts=' . $limit . '&paged=' . $paged);
		/* $wp_query->is_archive = true; $wp_query->is_home = false; */
	?>
	
	<?php echo do_shortcode('[ajax_load_more]'); ?>

	<?php 
		#wp_reset_query();
		#wt_pagination(); 
	?>
	
</div> <!--/feat-posts -->
