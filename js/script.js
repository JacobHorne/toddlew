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

	//CODE FOR SLIDER
	$(".mobile-navigation").hide();	

	//DROP DOWN ON ClICK 
	$(function(){
		$(".icon").on( "click", function(e){   
	      	$(".mobile-navigation").fadeToggle(400);
	      	e.preventDefault();
		});
	});



 	// Defining a function to set size for #hero 
    	var win    = $(window);
		var heroImage = $( '.hero' );

		var resize = function(){
			heroImage.css( { "height" : win.innerHeight("%50") + "px"});
		};

	    win.on( "resize load", function( e ){
	    	resize();
	    	console.log(win.innerHeight("%50"));
		});




})( window, undefined );