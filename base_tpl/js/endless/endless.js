
$(function	()	{
    // Cookie validation
 	
    $('aside').removeClass('skin-1');
    $('aside').removeClass('skin-2');
    $('aside').removeClass('skin-3');
    $('aside').removeClass('skin-4');
    $('#top-nav').removeClass('skin-1');
    $('#top-nav').removeClass('skin-2');
    $('#top-nav').removeClass('skin-3');
    $('#top-nav').removeClass('skin-4');
		
    $('aside').addClass('skin-1');
    $('#top-nav').addClass('skin-1');
	
    

	
    //Submenu
    $('aside li').hover(
	function(){
	    $(this).addClass('open')
	},
	function(){
	    $(this).removeClass('open')
	}
	)
	
    //scroll to top of the page
    $("#scroll-to-top").click(function()	{
	$("html, body").animate({
	    scrollTop: 0
	}, 600);
	return false;
    });

    //Toggle Menu
    $('#sidebarToggle').click(function()	{
	$('#wrapper').toggleClass('sidebar-display');
    });
	
    $('#inboxMenuToggle').click(function()	{
	$('#inboxMenu').toggleClass('menu-display');
    });
	
    $('#sizeToggle').click(function()	{
	$('#wrapper').toggleClass('sidebar-mini');
    });
	
    //Collapse panel
    $('.collapse-toggle').click(function()	{
	
	$(this).parent().toggleClass('active');
	
	var parentElm = $(this).parent().parent().parent().parent();
		
	var targetElm = parentElm.find('.panel-body');
		
	targetElm.toggleClass('collapse');
    });
		
   
	
    //Hover effect on touch device
    $('.image-wrapper').bind('touchstart', function(e) {
	$('.image-wrapper').removeClass('active');
	$(this).addClass('active');
    });
	
    //Dropdown menu with hover
    $('.hover-dropdown').hover(
	function(){
	    $(this).addClass('open')
	},
	function(){
	    $(this).removeClass('open')
	}
	)
	
    $("[data-toggle=popover]").popover();
    $("[data-toggle=tooltip]").tooltip();
	
});

$(window).load(function() {
	
    // Fade out the overlay div
    $('#overlay').fadeOut(800);
	
    $('body').removeAttr('class');
    $('body').removeAttr('style');

    //Enable animation
    $('#wrapper').removeAttr('class');
});

$(window).scroll(function(){
    var position = $(window).scrollTop();
    if(position >= 200)	{
	$('#scroll-to-top').attr('style','bottom:8px;');	
    }
    else {
	$('#scroll-to-top').removeAttr('style');
    }
});
function _wait(){
    //$('#overlay').fadeIn(800);
    $('#overlay').show();
}
function _ready(){
    $('#overlay').fadeOut(800);
}

function isChecked(selector){
    return $(selector).length > 0 ? true : false;
}