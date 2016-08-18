  /*global $*/;
  $(document).ready(function(){
      $('.slider').slider({
	  full_width:true,
	  height:500,
	  indicators:false
    });	
	
	$('.carousel').carousel();

	 // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
        

    });    