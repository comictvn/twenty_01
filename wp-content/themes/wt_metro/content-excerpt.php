<?php
/**
 * The template for displaying content in the archive and search results template
 *
 * @package  WellThemes
 * @file     content-excerpt.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="thumbnail">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('wt-cat-img'); ?></a>
	</div>
	
	<div class="post-right">
	
		<header class="entry-header">
			<div class="entry-meta">
				<span><?php the_time('F j, Y'); ?> | </span>
				<span><?php the_category(', ' ); ?></span>
				<!--<span class="author"><?php# the_author_posts_link(); ?></span>
					<?php# if ( comments_open() ) : ?>
						<span class="comments"><?php# comments_popup_link( __('no comments', 'wellthemes'), __( '1 comment', 'wellthemes'), __('% comments', 'wellthemes')); ?></span>		
					<?php# endif; ?>-->
			</div>
			<h3 class="entry-title">				
				<a href="<?php the_permalink() ?>">
					<?php echo the_title('','',FALSE);
						//display only first 70 characters in the title.	
						/* $short_title = mb_substr(the_title('','',FALSE),0, 70);
						echo $short_title; 
						if (strlen($short_title) > 69){ 
							echo '...'; 
						}  */
					?>	
				</a>
									
			</h3>
		
				
		
		</header><!-- /entry-header -->

		<div class="entry-content">
			<?php 
				//display only first 200 characters in the slide description.								
				$excerpt = get_the_excerpt();																
				echo mb_substr($excerpt,0, 159);									
				if (strlen($excerpt) > 160){ 
					echo '...'; 
				} 
			?>
			<a class="readmore" href="<?php the_permalink() ?>">Read More</a>
		</div><!-- /entry-content -->

		<footer class="entry-footer">

		</footer><!-- /entry-footer -->
		
	</div> <!-- /post-right -->
	
	
</article><!-- /post-<?php the_ID(); ?> -->
