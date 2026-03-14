<?php
/**
 * The template for displaying the footer
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

?>
</div> <!-- end page -->
<div id="footer-top"></div>
<footer class="footer">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/simply-assist-logo.svg' ); ?>" alt="Simply Assist Logo" class="mb-3" width="300">
			</div>
			<div class="col-md-4">
				<div class="mb-2"><i class="bi bi-send-fill"></i>
					<?= do_shortcode( '[contact_email]' ); ?>
				</div>
				<?php
				if ( get_field( 'contact_phone', 'option' ) ) {
					?>
				<div class="mb-2"><i class="bi bi-telephone-fill"></i>
					<?= do_shortcode( '[contact_phone]' ); ?>
				</div>
					<?php
				}
				?>
			</div>
			<div class="col-md-4">
				<?php
				$socials = get_field( 'socials', 'option' );
				if ( $socials && ( ! empty( $socials['facebook_url'] ) || ! empty( $socials['instagram_url'] ) || ! empty( $socials['twitter_url'] ) || ! empty( $socials['pinterest_url'] ) || ! empty( $socials['youtube_url'] ) || ! empty( $socials['linkedin_url'] ) ) ) {
					?>
				<div class="mt-3">
					<div>Connect:</div>
					<?= do_shortcode( '[social_icons width="24" height="24]' ); ?>
				</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<div class="colophon">
		<div class="container py-2">
			<div class="d-flex flex-wrap justify-content-between">
				<div class="col-md-6 text-center text-md-start">
					&copy; <?= esc_html( gmdate( 'Y' ) ); ?> Simply Assist.
				</div>
				<div class="col-md-6 d-flex align-items-center justify-content-end flex-wrap gap-1">
					<span><a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookies</a></span> |
					<span>Site by <a href="https://www.lamcat.co.uk/" rel="nofollow noopener"
							target="_blank">Lamcat</a></span>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php
wp_footer();
?>
</body>

</html>