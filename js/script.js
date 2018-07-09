$ (function(){

//$("#btnadd").on("click", function(){
//		$("#pic1").addClass("imgcircle",1000);
//	});

$("#accord").accordion({
	active: false,
	collapsible:true,
	heightStyle:"content",
	event:"mouseover",
	icons:{"header":"ui-icon-plus", "activeHeader":"ui-icon-minus"}
});
// widget tabs
$("#tabs").tabs({event:"mouseover",
	collapsible:true,
	heightStyle:"content",
	active: 1
});
$(".menu").menu();
$("#calendar").datepicker({changeYear:true, 
	                       changeMonth:true,
	                       yearRange: "1940:2018",
	                       showWeek:true, showOn:"button",
	                       showButtonPanel:true,
	                       showAnim:"explode",
	                       numberOfMonths:[1,3],
	                       duration:"slow", buttonText: "Select date",
	                       buttonImage: "img/home.png"

});
//widget button
//$("#btn4, #link").button();
//dialog
//$("#btn5").on("click", function(){
//	$("#dialog").dialog({
//		modal:true,
//		button:{Cancel:function(){
//			$(this).dialog("close");
//					} 
//				}, 
//			show:{effect: "explode", duration:800},
  //           hide:{effect: "explode", duration:800}
	//	});

//});
//slider widget
$("#slider").slider({
	max:200,
	range:true,
	values: [10,50],
	step: 5,
	animate:true,
	      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "values", 0 ) +
      " - $" + $( "#slider" ).slider( "values", 1 ) );

//draggable
$("#kart1, #kart2, #kart3").draggable({
	helper:"clone",
	revert: true,
	zIndex:100,
	opacity:0.5,
	cursor:"pointer",
	reverDuration: 5000

});
//droppable
$(".pics img").draggable({
	revert:"invalid",
	start: function(event,ui){
		ui.helper.css('transform', 'rotate(5deg) scale(1.2');
	},
	stop: function(event,ui){
		ui.helper.css('transform', 'rotate(0deg) scale(1)');
	},
	zIndex:100
});
$("#trash").droppable({
	activeClass: 'highLight',
	drop: function(event,ui){
		ui.helper.hide('explode');
		$(this).attr('src', 'img/trashcan-full-icon.png');
	}
})
// sortable
$(".spisok1").sortable({
	connectWith:'.spisok2',
	change:function(event,ui){
		ui.helper.css("backgroundColor","red");
			},
	stop:function(event,ui){
		ui.item.css("backgroundColor","grey");
			}
});
$(".spisok2").sortable({
	connectWith: '.spisok1'
});

//resizable
$("#resize").resizable();


//galery

$(".gal").colorbox({
	rel: "gal",
	transition: "fade",
	speed: 600,
	width: 500,
	height :400,
	innerWidth: 300,
	innerHeight: 300,
	opacity:0.7,
	slideshow:true,
	current: "Foto {current} from {total}",
	slideshowStart: "Zapusk",
	slideshowStop: "Stop"
});
$(".youtube").colorbox({
	iframe:true,
	width: 500,
	height: 400
});

$(".inline").colorbox({
	inline:true,
	width: "50%"
});
//bxslider
$(".slider").bxSlider({
	mode: "horizontal",
	speed: 700,
	minSlides:2,
	maxSlides: 2,
	slideWidth: 600,
	moveSlides:1,
	slideMargin: 10,
	captions: true,
	video:true,
	adaptiveHeigh:true
});
});
let wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
     });

wow.init();





