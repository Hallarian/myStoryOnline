<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<div id="authorOptions">
  <?php 
  	$author_id = get_the_author_meta( 'ID' );
  	$user_id = get_current_user_id();
  	$edit_post = add_query_arg( 'post', get_the_ID(), get_permalink( 851 + $_POST['_wp_http_referer'] ) );
  	if($author_id == $user_id) { ?>
  		<a class="editPost" href="<?php echo $edit_post; ?>">Edit Story <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/edit.png"></a>
  	<?php } else {

  	}
  ?>
  <?php echo do_shortcode('[ultimatemember_delete_post]'); ?>
 </div>



<article>

	<a id="custom-prev"> 
		<img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_left.png"> 
		<p>Previous Page</p>
	</a>
	<a id="custom-next">
		<p>Next Page</p>
		<img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_right.png">
	</a>

	<div id="book">

		<div> <!-- Cover -->
			<?php the_title( '<h1>', '</h1>' ); ?>
			<h1 id="author"><?php the_author(); ?></h1>
		</div> <!-- Cover -->

		<div class="dedication"> <!-- first page, left side -->
			<h2>This book is dedicated to: <?php echo get_post_meta($post->ID, "dedication", true); ?> 
			<p id="theme" style="display:none;"><?php 
			$category = get_the_category(); 
			$cat_name = $category[0]->cat_name; 
			echo $cat_name;?></p>
	
			</h2>

		</div> <!-- end first page -->

		<div id="start"> <!-- next pages -->
			<?php the_content(); ?>
		</div> <!-- end pages -->

		<div>
			<!-- back cover -->
		</div>

	</div> <!-- end book -->


	
</article><!-- #post-## -->
