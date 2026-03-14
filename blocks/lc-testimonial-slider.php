<?php
/**
 * Block template for LC Testimonial Slider.
 *
 * @package lc-simply2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? 'py-5';
$slider_id  = 'lc-testimonial-swiper-' . sanitize_html_class( str_replace( 'block_', '', $block['id'] ?? wp_unique_id() ) );

?>
<section class="lc-testimonial-slider <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<?php
		$q = new WP_Query(
			array(
				'post_type'      => 'testimonial',
				'posts_per_page' => -1,
			)
		);
		if ( $q->have_posts() ) {
			add_action(
				'wp_footer',
				static function () use ( $slider_id ) {
					?>
					<script>
						document.addEventListener('DOMContentLoaded', function () {
							var slider = document.getElementById(<?php echo wp_json_encode( $slider_id ); ?>);
							if (!slider || typeof Swiper === 'undefined' || slider.swiper) {
								return;
							}

							new Swiper(slider, {
								slidesPerView: 1,
								effect: 'fade',
								fadeEffect: {
									crossFade: true,
								},
								speed: 600,
								loop: true,
								autoplay: {
									delay: 5000,
									disableOnInteraction: false,
								},
								autoHeight: true,
							});
						});
					</script>
					<?php
				},
				100
			);

			?>
			<div id="<?= esc_attr( $slider_id ); ?>" class="testimonial-slider swiper">
				<div class="swiper-wrapper">
				<?php
				while ( $q->have_posts() ) {
					$q->the_post();
					?>
					<div class="testimonial-item swiper-slide p-4">
						<div class="testimonial-content"><?= wp_kses_post( get_the_content() ); ?></div>
						<div class="testimonial-author mt-3">
							&mdash; <strong><?= esc_html( get_field( 'attribution', get_the_ID()) ); ?></strong>
							<?php
							if ( get_field( 'company', get_the_ID() ) ) {
								echo ', ' . esc_html( get_field( 'company', get_the_ID() ) );
							}
							?>
						</div>
					</div>
					<?php
				}
				wp_reset_postdata();
				?>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</section>