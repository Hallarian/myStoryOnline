<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		
	</div><!-- .site-inner -->
</div><!-- .site -->




<script type="text/javascript">
    var $ = jQuery.noConflict();

    var text = document.getElementById("start").textContent;
    var textLength = text.length;
    var parts = text.match(/[\s\S]{1,700}/g) || [];

    var book = document.getElementById("book");
    var start = document.getElementById("start");
    start.remove();



//Booklet.js controls
$(function() {
    //single book
    $('#book').booklet( {
    	width: 850,
    	height: 550,
    	next: '#custom-next',
    	prev: '#custom-prev',
    	overlays: false,
    	closed: true,
    	covers: true
    });



    for (i = 0; i < parts.length; i++) {



        str = "<div> <p class='section'>" + parts[i] + "</p> </div>";

        $('#book').booklet("add",i + 2, str);

    }

    coverStyle();


})

function coverStyle() {
    var category = document.getElementById("theme").textContent;

switch(category) {
    case "Memory":
        $('.cover').addClass('memory');
        break;
    case "Recipe":
        $('.cover').addClass('recipe');
        break;
    case "Bed Time":
        $('.cover').addClass('bed-time');
        break;
    case "Family History":
        $('.cover').addClass('family-history');
        break;
    case "Travel":
        $('.cover').addClass('travel');
        break;
    case "Public Service":
        $('.cover').addClass('public-service');
        break;
    case "Vacations":
        $('.cover').addClass('vacations');
        break;
    case "Sports":
        $('.cover').addClass('sports');
        break;
    case "":
        $('.cover').addClass('default');
        break;
}
}


</script> 


</body>
</html>
