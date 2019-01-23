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
$outer_container=$(".main__portfolio");
$thumbScroller=$(".thumbScroller");
$thumbScroller_container=$(".thumbScroller .portfolio__examples");
$thumbScroller_content=$(".thumbScroller .example");
$thumbScroller_thumb=$(".thumbScroller .thumb");
 
var sliderWidth=$thumbScroller.width();
var itemWidth=$thumbScroller_content.width();
 
$thumbScroller_content.each(function (i) {
    totalContent=i*itemWidth;   
    $thumbScroller_container.css("width",totalContent+itemWidth);
});
 
$thumbScroller.mousemove(function(e){
    var mouseCoords=(e.pageX - this.offsetLeft);
      var mousePercentY=mouseCoords/sliderWidth;
      var destY=-(((totalContent-(sliderWidth-itemWidth))-sliderWidth)*(mousePercentY));
      var thePosA=mouseCoords-destY;
      var thePosB=destY-mouseCoords;
      if(mouseCoords==destY){
        $thumbScroller_container.stop();
      }
      if(mouseCoords>destY){
        $thumbScroller_container.css("left",-thePosA);
      }
      if(mouseCoords<destY){
        $thumbScroller_container.css("left",thePosB);
      }
});
 
var fadeSpeed=300;
 
$thumbScroller_thumb.each(function () {
    var $this=$(this);
    $this.fadeTo(fadeSpeed, 0.5);
});
 
$thumbScroller_thumb.hover(
    function(){ //mouse over
        var $this=$(this);
        $this.stop().fadeTo(fadeSpeed, 1);
    },
    function(){ //mouse out
        var $this=$(this);
        $this.stop().fadeTo(fadeSpeed, 0.5);
    }
);