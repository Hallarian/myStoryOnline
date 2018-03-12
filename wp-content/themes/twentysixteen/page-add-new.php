<?php if (isset($_POST['story_submit'])) {

// Sanitize the form fields here
$title = $_POST['title'];
$story = $_POST['story'];
$dedication = $_POST['dedication'];
$theme = $_POST['theme'];
$sharing = $_POST['sharing'];

    // Insert the page to the database
    $story_data = array(
    'post_title'    =>  $title,
    'post_content'  =>  $story,
    'post_status'   =>  'publish',
    'post_author'   =>  $current_user->ID,
    'post_type'     =>  'post',
    'dedication'    =>  $dedication,
    'theme'         =>  $theme,
    'sharing'       =>  $sharing
);


$pid = wp_insert_post( $story_data );

add_post_meta($pid, 'dedication', $dedication, true);
add_post_meta($pid, 'theme', $theme, true);
add_post_meta($pid, 'sharing', $sharing, true);
    
} ?>

<?php get_header(); ?>
<div class = "content">
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

$("#save").on("click", function(e) {
  nextSection();
});

$("#stepBack").on("click", function(e){
  pastSection();
});


 
$("form").on("submit", function(e){
  if ($("#next").is(":visible") || $("fieldset.current").index() < 5){
    e.preventDefault();
  }
});





function goToSection(i){
  $("fieldset:gt("+i+")").removeClass("current").addClass("next");
  $("fieldset:lt("+i+")").removeClass("current");
  $("li").eq(i).addClass("current").siblings().removeClass("current");
  setTimeout(function(){
    $("fieldset").eq(i).removeClass("next").addClass("current active");
      if ($("fieldset.current").index() == 5) {
        $(".next").addClass("hidden");
        $("input[type=submit]").removeClass("hidden");
      } else {
        $(".next").removeClass("hidden");
        $("input[type=submit]").addClass("hidden");
      }
  }, 80);
 
}







function pastSection(){
  var i = $("fieldset.current").index();
  if (i < 6){
    $("li").eq(i-1).addClass("active");
    goToSection(i-1);
  }
}
 

function nextSection(){
  var i = $("fieldset.current").index();
  if (i < 5){
    $("li").eq(i+1).addClass("active");
    goToSection(i+1);
  }
}
 
$("li").on("click", function(e){
  var i = $(this).index()
  if ($(this).hasClass("active")){
    goToSection(i);
  } else {
  }
});
</script>
