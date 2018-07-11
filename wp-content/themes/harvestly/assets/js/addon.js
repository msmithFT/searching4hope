$(document).ready(function(){

	/* Top Navigation */
	
	$('<span class="ncaret"></span>').insertAfter('.menu-item-has-children > a, .page_item_has_children > a');
	
	/* Add or remove class 'mobile' for mobile menu */
	/* 768px - 17px = 751px */
	function navsetup() {
		var winWidth = $(window).width();
		if ((winWidth < 751) && (ismobile == false)) {
			$('.menu-item-has-children, .page_item_has_children').addClass('mobile');
			/* Add padding left for sub menu in mobile display */
			$('.mobile').each(function() {
			  var apad = $(this).find('ul > li > a').css('padding-left').replace("px", "");
			  apad = parseInt(apad);
			  $(this).find('ul > li > a').css('padding-left', apad + 15 + "px");
			});
			ismobile = true;
		}
		if ((winWidth >= 751) && (ismobile == true)) {
			$('.menu-item-has-children, .page_item_has_children').removeClass('mobile');
			/* Subtract padding left for sub menu in mobile display */
			$('.menu-item-has-children, .page_item_has_children').each(function() {
			  var apad = $(this).find('ul > li > a').css('padding-left').replace("px", "");
			  apad = parseInt(apad);
			  $(this).find('ul > li > a').css('padding-left', apad - 15 + "px");
			});
			ismobile = false;
		}
	}
	
	var winWidth = $(window).width();
	if(winWidth < 751){
		var ismobile = true;
		$('.menu-item-has-children, .page_item_has_children').addClass('mobile');
		/* Add padding left for sub menu in mobile display */
		$('.mobile').each(function() {
		  var apad = $(this).find('ul > li > a').css('padding-left').replace("px", "");
		  apad = parseInt(apad);
		  $(this).find('ul > li > a').css('padding-left', apad + 15 + "px");
		});
	} else {
		var ismobile = false;
	}
	
	$('.ncaret').unbind().click(function(){
	  $(this).next('ul').toggleClass('toggled-on');
	});
	
	$(window).resize(function() {
		navsetup();
	});
	
  /* Navigation */
  $('.banner').waypoint(function() {
	$('#header').toggleClass("header-two");
	$('.logo').toggleClass("logo-two");
	$('#primary-menu').toggleClass("primary-menu-two");
  }, {
	offset: '-1'
  });

    /*$(".banner").owlCarousel({

      autoPlay : true,
      slideSpeed : 300,
      paginationSpeed : 400,
	  pagination : false,
      singleItem:true

    });*/
	
  $('#about').waypoint(function() {
	$('.navbar').toggleClass('navbarMove');
  }, {
	offset: '80%'
  });
	
  /* Our Service */
  $('.service-row-1').waypoint(function() {
	$(this).removeClass("service-row-1 .one").addClass("animated fadeInRight");
	$(this).removeClass("service-row-1 .two").addClass("animated fadeInRight");
	$(this).removeClass("service-row-1 .three").addClass("animated fadeInRight");
  }, {
	triggerOnce: true,
	offset: '60%'
  });
  $('.service-row-2').waypoint(function() {
	$(this).removeClass("service-row-2 .one").addClass("animated fadeInRight");
	$(this).removeClass("service-row-2 .two").addClass("animated fadeInRight");
	$(this).removeClass("service-row-2 .three").addClass("animated fadeInRight");
  }, {
	triggerOnce: true,
	offset: '60%'
  });
  $('.service-row-3').waypoint(function() {
	$(this).removeClass("service-row-3 .one").addClass("animated fadeInRight");
	$(this).removeClass("service-row-3 .two").addClass("animated fadeInRight");
	$(this).removeClass("service-row-3 .three").addClass("animated fadeInRight");
  }, {
	triggerOnce: true,
	offset: '60%'
  });
  
  /* Our Team */
  $('.team1').waypoint(function() {
	$('#ourteam .imgwrap').addClass("animated swing");
  }, {
	triggerOnce: true,
	offset: '50%'
  });
  
  /* Funny Fact */
  $('.funnyfact').waypoint(function() {
	$('.timer').each(count);
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
  }, {
	triggerOnce: true,
	offset: '50%'
  });
  

    $(".testimonial1 ul").owlCarousel({

      autoPlay : true,
      slideSpeed : 300,
      paginationSpeed : 400,
	  pagination : false,
      singleItem:true

    });

  /* Contact Us */
  $('.contact-inner').waypoint(function() {
	$('.contact-left').addClass("animated fadeInLeft");
	$('.contact-right').addClass("animated fadeInRight");
  }, {
	triggerOnce: true,
	offset: '30%'
  });
  
  /* Bottom Logo */
  $('.logo-bottom').waypoint(function() {
	$(this).css('opacity','1');
  }, {
	triggerOnce: true,
	offset: '85%'
  });

});
