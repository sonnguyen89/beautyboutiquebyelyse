<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="site-info">
                        © 2020 Beauty Boutique By Elyse. Website & Digital Marketing By  <a href="<?php echo esc_url( 'https://www.uberink.com.au/' ); ?>"><?php esc_html_e( 'UBERINK', 'wp-bootstrap-4' ); ?></a>
                    </div><!-- .site-info -->
                </div>
                <div class="col-sm">
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
		</div>
		<!-- /.container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
