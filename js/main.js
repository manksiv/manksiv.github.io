jQuery("document").ready(function($){
     
    var nav = $('.nav-container');
     
    $(window).scroll(function () {
        if ($(this).scrollTop() > 136) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
  
});
menu.onclick = function myFunction() {
	var x = document.getElementById('myTopnav');
	if (x.className === "topnav") {
		x.className += " responsive";
	}else{
		x.className = "topnav"
	}
}