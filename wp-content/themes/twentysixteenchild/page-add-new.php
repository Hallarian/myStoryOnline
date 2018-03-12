<?php 
/* 
Template Name: New 
*/ ?>


<?php if (isset($_POST['story_submit'])) {

// Sanitize the form fields here
$title = $_POST['title'];
$story = $_POST['story'];
$dedication = $_POST['dedication'];
$category = $_POST['category'];
$sharing = $_POST['sharing'];


    // Insert the page to the database
    $story_data = array(
    'post_title'    =>  $title,
    'post_content'  =>  $story,
    'post_status'   =>  'publish',
    'post_author'   =>  $current_user->ID,
    'post_type'     =>  'post',
    'dedication'    =>  $dedication,
    'category'      =>  $category,
    'sharing'       =>  $sharing
);


$pid = wp_insert_post( $story_data );
wp_set_post_categories($pid, $_POST['category'] );


add_post_meta($pid, 'dedication', $dedication, true);
add_post_meta($pid, 'sharing', $sharing, true);
    
} ?>



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
      <h1>Test <?php print_r($title); ?></h1>
        <div class = "story-submit">
        <?php include 'form.php';?>
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
