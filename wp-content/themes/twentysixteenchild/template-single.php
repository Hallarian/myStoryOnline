<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="book">

		<div> <!-- Cover -->
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div> <!-- Cover -->

		<div class="dedication"> <!-- first page, left side -->
			<h2>This book is dedicated to: <?php echo get_post_meta($post->ID, "dedication", true); ?></h2>
			<h2>This book's theme is: <?php echo get_post_meta($post->ID, "theme", true); ?></h2>
			<h2>This book's sharing is set to: <?php echo get_post_meta($post->ID, "sharing", true);?></h2>
		</div> <!-- end first page -->

		<div> <!-- next pages -->
			<p>	<?php the_content(); ?> </p>
		</div> <!-- end pages -->

		<div>
			<!-- back cover -->
		</div>

	</div> <!-- end book -->

	<div class="entry-content">
		<?php

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->