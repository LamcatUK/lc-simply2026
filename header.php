<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-simply2026
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta
		charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preload"
		href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/playfair-display-v40-latin-regular.woff2' ); ?>"
		as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload"
		href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/source-sans-3-v19-latin-600.woff2' ); ?>"
		as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload"
		href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/source-sans-3-v19-latin-regular.woff2' ); ?>"
		as="font" type="font/woff2" crossorigin="anonymous">
	<?php
	if ( is_front_page() ) {
		// TODO: Add JSON-LD structured data here.
		?>
	<script type="application/ld+json">

	</script>
		<?php
	}
	if ( ! is_user_logged_in() && strpos( get_home_url(), 'staging' ) === false ) {
		if ( get_field( 'ga_property', 'options' ) ) {
			?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async
		src="https://www.googletagmanager.com/gtag/js?id=<?= esc_attr( get_field( 'ga_property', 'options' ) ); ?>">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config',
			'<?= esc_attr( get_field( 'ga_property', 'options' ) ); ?>'
		);
	</script>
			<?php
		}
		if ( get_field( 'gtm_property', 'options' ) ) {
			?>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer',
			'<?= esc_attr( get_field( 'gtm_property', 'options' ) ); ?>'
		);
	</script>
	<!-- End Google Tag Manager -->
			<?php
		}
	}
	if ( get_field( 'google_site_verification', 'options' ) ) {
		echo '<meta name="google-site-verification" content="' . esc_attr( get_field( 'google_site_verification', 'options' ) ) . '" />';
	}
	if ( get_field( 'bing_site_verification', 'options' ) ) {
		echo '<meta name="msvalidate.01" content="' . esc_attr( get_field( 'bing_site_verification', 'options' ) ) . '" />';
	}
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
	<?php understrap_body_attributes(); ?>>
	<?php
	if ( ! is_user_logged_in() && strpos( get_home_url(), 'staging' ) === false ) {
		if ( get_field( 'gtm_property', 'options' ) ) {
			?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id=<?= esc_attr( get_field( 'gtm_property', 'options' ) ); ?>"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
			<?php
		}
	}
	do_action( 'wp_body_open' );
	?>
<header id="wrapper-navbar" class="fixed-top" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar-expand-lg navbar-light" aria-label="Main Navigation">
		<div class="container d-flex justify-content-between">
			<a href="/" class="navbar-brand logo" aria-label="Simply Assist Homepage"></a>
			<a href="#contact" class="button button-primary d-none d-md-inline-block">Start a conversation</a>
		</div>
	</nav>
</header>