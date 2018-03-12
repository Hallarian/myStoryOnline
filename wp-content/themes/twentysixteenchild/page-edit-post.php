<?php 
/* 
Template Name: Edit 
*/ ?>



<?php $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '-1' ) ); ?>
 
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
<?php
 
    if ( isset( $_GET['post'] ) ) {
      if ( $_GET['post'] == $post->ID ){
        $current_post = $post->ID;
        $title = get_the_title();
        $story = get_the_content($current_post);
        $dedication = get_post_meta($current_post, 'dedication');
        $sharing = get_post_meta($current_post, 'sharing');
        $category = get_the_category();
      }
    } 
 
?>
 
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php 
  global $current_post;

    // Edit the info in the database
  $story_data = array(
    'ID' => $current_post,
    'post_title'    =>  $_POST['title'],
    'post_content'  =>  $_POST['story'],
    'post_status'   =>  'publish',
    'post_type'     =>  'post',
    'category'      =>  $category,
  );

if($current_post) {
    // Update Custom Meta
    update_post_meta($current_post, 'dedication', $_POST['dedication']);
    update_post_meta($current_post, 'sharing', $_POST['sharing']);
    wp_set_post_terms($current_post, $_POST['category'], 'category' );
 
    // Redirect
    // wp_redirect(home_url());
    // exit;
}


  $pid = wp_update_post( $story_data );



?>



<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">



  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>

</head>

<?php $current_user = wp_get_current_user(); ?>












<body <?php body_class(); ?> style="display: initial"> <!--onload="parts.forEach(divide)"-->
  

      <div class = "content">
        <div class = "story-submit">
        <?php include 'edit.php';?>
        </div>
      </div>












<script type="text/javascript">
    var $ = jQuery.noConflict();


$("body").on("keyup", "form", function(e){
  if (e.which == 13){
    if ($("#next").is(":visible") && $("fieldset.current").find("input, textarea").valid() ){
      e.preventDefault();
      nextSection();
    }
  }
});


$("body").addClass("form_background");

$("header").addClass("hidden");

$("#page").addClass("site_background");

$("html").addClass("html_special")

$("#stepNext").on("click", function(e){
  nextSection();
});


$("#stepBack").on("click", function(e){
  pastSection();
});


 
$("form").on("submit", function(e){
    //e.preventDefault();
});





function goToSection(i){
    $("fieldset").eq(i).addClass("current").removeClass("hidden");
    $("fieldset").eq(i).siblings().removeClass("current").addClass("hidden");
    $(".progress").eq(i).addClass("current");
    $(".progress").eq(i).siblings().removeClass("current");

      if ($("fieldset.current").index() == 3) {
        $("input[type=submit]").removeClass("hidden");
      } else {
        $("input[type=submit]").addClass("hidden");
      }
  };
 



function pastSection(){
  var i = $("fieldset.current").index();
  if (i < 4){
    goToSection(i-1);
  }
}
 

function nextSection(){
  var i = $("fieldset.current").index();
  if (i < 3){
    goToSection(i+1);
  }
}



function validateForm() {
  var x = $("#story").val();
  if (x == "") {
    alert("Your story is empty!")
    return false;
  }

  var y = $("#title").val();
  if (y == "") {
    alert("Your story needs a title!")
    return false;
  }
}


</script>



</body>
</html>
