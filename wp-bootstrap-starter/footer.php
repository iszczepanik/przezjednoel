<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
				</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
</div><!-- #page -->
<div class="fluid-container">
	<!-- <div class="col-lg-3"> -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer col-lg-3" role="contentinfo">
		<!-- <div class="container-fluid p-3 p-md-5"> -->
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="Wordpress Technical Support" alt="Bootstrap Wordpress Theme"><?php echo esc_html__('Bootstrap Wordpress Theme','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		<!-- </div> -->
	</footer><!-- #colophon -->
	<!-- </div> -->
<?php endif; ?>
</div><!-- footer fluid-container -->

<?php wp_footer(); ?>
</body>
</html>
