<?php
/**
 * Template Name: Text Page
 *
 * Template for displaying text pages.
 *
 * @package lc-simply2026
 */

defined('ABSPATH') || exit;

get_header();
?>
<main id="main">
	<div class="container py-5">
		<?php
		the_post();    
		the_content(); 
		?>
	</div>
</main>
<?php
get_footer();