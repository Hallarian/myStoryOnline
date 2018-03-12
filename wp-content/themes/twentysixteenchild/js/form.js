var $ = jQuery.noConflict();


$("body").on("keyup", "#newStory", function(e){
  if (e.which == 13){
    if ($("#next").is(":visible") && $("fieldset.current").find("input, textarea").valid() ){
      e.preventDefault();
      nextSection();
    }
  }
});





$("#next").on("click", function(e){
  nextSection();
});


$("#back").on("click", function(e){
  pastSection();
});


 
$("#newStory").on("submit", function(e){
  if ($("#next").is(":visible") || $("fieldset.current").index() < 5){
    e.preventDefault();
  }
});





function goToSection(i){
  $("fieldset:gt("+i+")").removeClass("current")
  $("fieldset:lt("+i+")").removeClass("current");
  $(".progress").eq(i).addClass("current").siblings().removeClass("current");
  setTimeout(function(){
    $("fieldset").eq(i).removeClass("next").addClass("current active");
      if ($("fieldset.current").index() == 4){
        $("#next").addClass("hidden");
        $("input[type=submit]").removeClass("hidden");
      } else {
        $("#next").removeClass("hidden");
        $("input[type=submit]").addClass("hidden");
        $("#back").removeClass("hidden")
      }
  }, 80);
 
}






function pastSection(){
  var i = $("fieldset.current").index();
  if (i < 5){
    $(".progress").eq(i-1).addClass("current");
    goToSection(i-1);
  }
}
 




function nextSection(){
  var i = $("fieldset.current").index();
  if (i < 5){
    $(".progress").eq(i+1).addClass("current");
    goToSection(i+1);
  }
}
 