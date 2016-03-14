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

	$(".modal").hide();
	
	//DROP DOWN ON ClICK 
	$(function(){
		$("#mobile-icon").on( "click", function(e){
			$(".modal").toggleClass('visible');   
	      	// e.preventDefault();
	      	console.log("Te");
		});
	});

	// $(function(){
	// 	$("#close-modal-icon").on( "click", function(e){
	// 		$(".modal").removeClass('visible');   
	//       	// $(".modal").fadeToggle(400);
	//       	// e.preventDefault();
	//       	console.log("This Works");
	// 	});
	// });





})( window, undefined );