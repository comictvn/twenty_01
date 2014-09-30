

<?php
/**
 * Template Name: Cate
 * Description: A Page Template to display full width page contents.
 *
 * @package  WellThemes
 * @file     page-full.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<?php get_header(); ?>	
	<section id="primary">
		<div id="content" role="main">
			<div id="feat-posts">
				<?php if (have_posts()) :?>
						<header class="cat-header">	
							<h3><?php the_title(); ?></h3>
							<a class="rss" href="<?php echo home_url(); ?>?cat=<?php echo $cat_id; ?>&feed=rss2" >RSS</a>
						</header>
					<?php while ( have_posts() ) : the_post(); ?>				
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			
		
					
		</div><!-- /content -->
	</section><!-- /primary -->
	
<?php get_sidebar('left'); ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>