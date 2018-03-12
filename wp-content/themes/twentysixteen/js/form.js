var $ = jQuery.noConflict();













 
$("#newStory").on("submit", function(e){
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
      if ($("fieldset.current").index() == 4){
        $("#next").addClass("hidden");
        $("input[type=submit]").removeClass("hidden");
      } else if ($("fieldset.current").index() == 5) {
        $("#next").addClass("hidden");
        $("input[type=submit]").addClass("hidden");
        $("#share").removeClass("hidden");
        $("#back").addClass("hidden")
      } else {
        $("#next").removeClass("hidden");
        $("input[type=submit]").addClass("hidden");
        $("#save").addClass("hidden")
        $("#back").removeClass("hidden")
      }
  }, 80);
 
}






function pastSection(){
  var i = $("fieldset.current").index();
  if (i < 5){
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
  var i = $(this).index();
  if ($(this).hasClass("active")){
    goToSection(i);
  } else {
  }
});