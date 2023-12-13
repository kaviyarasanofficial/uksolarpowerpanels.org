
	jQuery(document).ready(function($){
			$(".section-titles .slider").click(function(){
			$(".tab-content1").toggle();
			$(".tab-content2").toggle();
			});

		$(".btn.up").click(function(){
			$(".tab-pane2").animate({'top': '0px'});
		});
		
		$(".btn.down").click(function(){
			$(".tab-pane2").animate({'top': '1000px'});
		});

	

            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });      


   // About section custom css

     // ======================== About Section Circle Progress Bar =======================>


 function radial_animate() {
     $('svg.radial-progress').each(function(index, value) {

         $(this).find($('circle.bar--animated')).removeAttr('style');
         // Get element in Veiw port
         var elementTop = $(this).offset().top;
         var elementBottom = elementTop + $(this).outerHeight();
         var viewportTop = $(window).scrollTop();
         var viewportBottom = viewportTop + $(window).height();

         if (elementBottom > viewportTop && elementTop < viewportBottom) {
             var percent = $(value).data('countervalue');
             var radius = $(this).find($('circle.bar--animated')).attr('r');
             var circumference = 2 * Math.PI * radius;
             var strokeDashOffset = circumference - ((percent * circumference) / 100);
             $(this).find($('circle.bar--animated')).animate({ 'stroke-dashoffset': strokeDashOffset }, 2800);
         }
     });
 }
 // To check If it is in Viewport 
 var $window = jQuery(window);

 function check_if_in_view() {
     $('.countervalue').each(function() {
         if ($(this).hasClass('start')) {
             var elementTop = $(this).offset().top;
             var elementBottom = elementTop + $(this).outerHeight();

             var viewportTop = $(window).scrollTop();
             var viewportBottom = viewportTop + $(window).height();

             if (elementBottom > viewportTop && elementTop < viewportBottom) {
                 $(this).removeClass('start');
                 $('.countervalue').text();
                 var myNumbers = $(this).text();
                 if (myNumbers == Math.floor(myNumbers)) {
                     $(this).animate({
                         Counter: $(this).text()
                     }, {
                         duration: 2800,
                         easing: 'swing',
                         step: function(now) {
                             $(this).text(Math.ceil(now) + '%');
                         }
                     });
                 } else {
                     $(this).animate({
                         Counter: $(this).text()
                     }, {
                         duration: 2800,
                         easing: 'swing',
                         step: function(now) {
                             $(this).text(now.toFixed(2) + '$');
                         }
                     });
                 }

                 radial_animate();
             }
         }
     });
 }

 $window.on('scroll', check_if_in_view);
 $window.on('load', check_if_in_view);

 // ============================== End ===============================>


	$('.contactoffice-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			500: {
				items: 2
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	});



    // required elements
    var imgPopup = $('.img-popup');
    var imgCont = $('.gallery-item');
    var popupImage = $('.img-popup img');
    var closeBtn = $('.close-btn');
    // handle events
    imgCont.on('click', function() {
        var img_src = $(this).children('.gallery-icon').children('.image').children('img').attr('src');
        imgPopup.children('img').attr('src', img_src);
        imgPopup.addClass('opened');
    });
    $(imgPopup, closeBtn).on('click', function() {
        imgPopup.removeClass('opened');
        imgPopup.children('img').attr('src', '');
    });
    popupImage.on('click', function(e) {
        e.stopPropagation();
    });
});