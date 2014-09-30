<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package  WellThemes
 * @file     footer.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
	</div>
</div><!-- /main -->
	<footer id="footer" role="contentinfo">
		<div id="container">
		
		<div class="footer-info">
		<div class="logo_footer">
			<?php if (wt_get_option( 'wt_logo_url' )) { ?>
				<h1>
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo wt_get_option( 'wt_logo_url' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				</h1>	
			<?php } else {?>
				<h1 class="site-title">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
						<?php bloginfo('name'); ?>
					</a>
				</h1> 
				<h3>
					<?php bloginfo('description'); ?>
				</h3>
			<?php } ?>	
			</div>	<!-- /logo -->	
			<?php if (wt_get_option( 'wt_footer_text_left' )){ ?> 
				<div class="footer-left">

					<?php echo wt_get_option( 'wt_footer_text_left' ); ?>			
				</div>
			<?php } ?>
			
						
        </div> <!--/foote-info -->
		</div><!-- /container -->
	</footer><!-- /footer -->



<?php wp_footer(); ?>

</body>
</html>