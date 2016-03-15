/* js file */

(function( window, undefined ){

	
	//Adding Active States to Navigation
	
	// $(function() {
 	//     	var url = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
    
	//     $(".full-navigation a").each(function(){
	//         if($(this).attr("href") == url || $(this).attr("href") == '' ) {
	//         	$(this).attr('id', 'activeNav');
	//         }
	//     })
	// });


	//Adding Active States to Sidebar
	
	// $(function() {
 	//     	var url = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
    
	//     $(".sidebar ul a").each(function(){
	//         if($(this).attr("href") == url || $(this).attr("href") == '' ) {
	//         	$(this).attr('id', 'activeSideBar');
	//         }
	//     })
	// });

	var didScroll = true;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $(".navigation").outerHeight();

	$(window).scroll(function(event){
	    didScroll = true;
	});

	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);

	function hasScrolled() {
	    var scrollTop = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - scrollTop) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.

	    if (scrollTop > lastScrollTop && scrollTop > navbarHeight){
	        // Scroll Down
	        $(".navigation").addClass("scrollUp");
	    } 
	    else {
	        // Scroll Up
		    if(scrollTop + $(window).height() < $(document).height()) {
		        $(".navigation").removeClass("scrollUp");
		     }
	    }
    
    lastScrollTop = scrollTop;
}


	








	$(".modal").hide();
	
	//DROP DOWN ON ClICK 
	$(function(){
		$("#mobile-icon").on( "click", function(e){
			$(".modal").toggleClass('visible');   
	      	// e.preventDefault();
		});
	});


})( window, undefined );