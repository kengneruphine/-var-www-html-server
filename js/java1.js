    $(function() {
                        // create the image rotator
                        setInterval("rotateImages()", 4000);

         $("input").focus(function(){
		  $(this).css("background-color","#80B3FF");
		  });

		  $("input").blur(function(){
		   $(this).css("background-color","#C4C4C4");
		   });


                });

                function rotateImages() {
                        var oCurPhoto = $('#photoShow div.current');
                        var oNxtPhoto = oCurPhoto.next();
                        if (oNxtPhoto.length == 0)
                                oNxtPhoto = $('#photoShow div:first');

                        oCurPhoto.removeClass('current').addClass('previous');
                        oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
                                function() {
                                        oCurPhoto.removeClass('previous');
                                });
                }
	$(document).ready(function(){
 $("#anim").click(function(){
 $("#anim").animate({
  left:'800px',
  opacity: '0.5',
	height: '+=25px',
	width: '+=25px'
	});
	});
	});
