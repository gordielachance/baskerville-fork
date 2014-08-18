jQuery(document).ready(function($) {

	//Masonry
        var msnryContainerSelector = ".js-masonry";
	var msnryItemSelector = ".js-masonry-item";

	$(msnryContainerSelector).imagesLoaded(function(){
		
            $(msnryContainerSelector).masonry({
			itemSelector: msnryItemSelector
		});
                
                $(msnryContainerSelector).masonry( 'on', 'layoutComplete', function( msnryInstance, laidOutItems ) {
                    var masonryItems = $(this.element).find(msnryItemSelector);
                    masonryItems.fadeTo(400, 1);// Fade blocks in after images are ready (prevents jumping and re-rendering)
                });


	});

	$(document).ready( function() { setTimeout( function() { $(msnryContainerSelector).masonry(); }, 500); });

	$(window).resize(function () {
		$(msnryContainerSelector).masonry();
	});


	// Toggle mobile-menu
	$(".nav-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".mobile-navigation").slideToggle();
	});
	
	
	// Toggle search form
	$(".search-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".header-search-block").slideToggle( 400, function() {
                    var input = $(this).find('input[type="search"]');
                    input.focus();
                });	 
		return false;
	});
	
	
	// Show mobile-menu > 1000
	$(window).resize(function() {
		if ($(window).width() > 1000) {
			$(".nav-toggle").removeClass("active");
			$(".mobile-navigation").hide();
		}
	});
	
	
	// Load Flexslider
    $(".flexslider").flexslider({
        animation: "slide",
        controlNav: false,
        prevText: "Previous",
        nextText: "Next",
        smoothHeight: true   
    });

        
    // Add custom audio player
	$('#audio-player').mediaelementplayer({
	    alwaysShowControls: true,
	    features: ['playpause','progress','volume'],
	    audioVolume: 'horizontal',
	    audioWidth: 872,
	    audioHeight: 100
	});
	
			
	// resize videos after container
	var vidSelector = ".post iframe, .post object, .post video, .widget-content iframe, .widget-content object, .widget-content iframe";	
	var resizeVideo = function(sSel) {
		$( sSel ).each(function() {
			var $video = $(this),
				$container = $video.parent(),
				iTargetWidth = $container.width();

			if ( !$video.attr("data-origwidth") ) {
				$video.attr("data-origwidth", $video.attr("width"));
				$video.attr("data-origheight", $video.attr("height"));
			}

			var ratio = iTargetWidth / $video.attr("data-origwidth");

			$video.css("width", iTargetWidth + "px");
			$video.css("height", ( $video.attr("data-origheight") * ratio ) + "px");
		});
	};

	resizeVideo(vidSelector);

	$(window).resize(function() {
		resizeVideo(vidSelector);
	});
	
	
	// Smooth scroll to header
    $('.tothetop').click(function(){
		$('html,body').animate({scrollTop: 0}, 500);
		$(this).unbind("mouseenter mouseleave");
        return false;
    });
    
    
});