<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pingpassion
*/

$dataRevetements = get_fields();

get_header();
?>

<main id="primary" class="site-main">
	
	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			?>

			<p>Rapidité : <?= $dataRevetements['rapidite']; ?></p>
			<p>Contrôle : <?= $dataRevetements['controle']; ?></p>
			<p>Adhérence : <?= $dataRevetements['adherence']; ?></p>
			<p>Epaisseur:  <?= $dataRevetements['epaisseur']; ?></p>

<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'pingpassion' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'pingpassion' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

