$(function(){
$('.thumbs a').click(function(){
var bigPath=$(this).attr('href');
var bigAlt=$(this).attr('title');
$('#bigImg').attr({src:bigPath,alt:bigAlt});
return false;
});
});

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
		wrap:'circular',
		size: 3,
		scroll: 2
		
    });
});

$(window).load(function() {
	$('#slider').anythingSlider({
		buildNavigation : true,
		startText       : false,
		stopText        : false,
		autoPlay        : false
	});
	
});
$(document).ready(function() {
$('.butt a').click(function(){
   $('.form').css({left:'auto',right:'-1px'})
   return false;
});
 });  
$(document).ready(function() {
$('.right .click').click(function(){
 if ($('.basket_w').is('.hidden')){
  $('.basket_w').animate({'width':'485px'},600,function(){
   $('.basket_w').removeClass('hidden');
  })
 }
 else{
  $('.basket_w').animate({'width':'75px'},600,function(){
   $('.basket_w').addClass('hidden');
  })}
 ; return false;  
});

 }); 
$(document).ready(function() {
$('.select').click(function(){
   if($('#li').is('.hide')) $('#li').removeClass('hide');
   else $('#li').addClass('hide')
})


	$(function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
	});
	 });