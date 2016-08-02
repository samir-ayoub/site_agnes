$(document).ready(function(){

// resize height by window size
	// $(window).resize(function() {
	//     $('#front-page, #formulario').height($(window).height() - 46);
	// });

	// $(window).trigger('resize');


// carrossel testemunhal
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:1,
	    loop:true,
	    margin:10,
	    autoHeight:true,
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    nav:false,
	    dots:true,
	});
	$('.play').on('click',function(){
	    owl.trigger('autoplay.play.owl',[1000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('autoplay.stop.owl')
	})

// slow scroll

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

// wow animacao starta quando scrolla

	new WOW().init();
	
	// show avaliacao

	$(".botao-avaliacao").on('click', function(){
		$("#avaliation").show();
		$('#avaliation').ScrollTo({
			duration: 500,
		});
	});



	$('#scrollto2').ScrollTo({
	    duration: 2000,
	    easing: 'linear'
	});




// menu active

	$(".main-menu li a").on('click', function(){
		$(".main-menu li").removeClass('active');
		$(this).parent().addClass('active');
	});

	
	$(".close-button").on('click', function(){
		$("#avaliation").hide();
	});
	


});


