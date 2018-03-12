<?php
/*
* Template Name: Story
* Template Post Type: post
*/

include 'story-header.php'; ?>

<a href="http://mystoryonline.org/my-profile/<?php $current_user->user_login?>/" class="btn exit" id="exit">Stop Viewing X</a>

<div id="primary" class="content-area">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			

			

			// End of the loop.
		endwhile;
		?>



</div><!-- .content-area -->

<?php include 'story-footer.php'; ?>
