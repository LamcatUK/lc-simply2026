<?php
/**
 * Block template for LC Contact.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? 'py-5';

?>
<section class="lc-contact <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="row gy-5">
			<div class="col-md-6">
				<h2><?= esc_html( get_field( 'title' ) ); ?></h2>
				<div class="mb-4"><?= wp_kses_post( get_field( 'content' ) ); ?></div>
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
				$socials = get_field( 'socials', 'option' );
				if ( $socials && ( ! empty( $socials['facebook_url'] ) || ! empty( $socials['instagram_url'] ) || ! empty( $socials['twitter_url'] ) || ! empty( $socials['pinterest_url'] ) || ! empty( $socials['youtube_url'] ) || ! empty( $socials['linkedin_url'] ) ) ) {
					?>
				<div class="mt-3">
					<span class="me-2">Connect:</span> <?= do_shortcode( '[social_icons class="has-700-font-size d-inline"]' ); ?>
				</div>
					<?php
				}
				?>
			</div>
			<div class="col-md-5 offset-md-1">
				<?= do_shortcode( get_field( 'form_shortcode' ) ); ?>
			</div>
		</div>
	</div>
</section>