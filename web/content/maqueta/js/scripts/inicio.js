//Scripts Inicio v1.0
$(document).ready(function(){
	$('a[href="#search"]').on('click', function(event) {                    
		$('#search').addClass('open');
		$('#search > form > input[type="search"]').focus();
	});            
	$('#search, #search button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			$(this).removeClass('open');
		}
	}); 
	
	$('.bxslider').bxSlider();

	$('#slider-informes').bxSlider({
		minSlides: 2,
		maxSlides: 4,
		slideWidth: 220,
		slideMargin: 10
	});

	$('#slider-perfil').bxSlider({
		minSlides: 2,
		maxSlides: 4,
		slideWidth: 220,
		slideMargin: 10
	});


	$('.up').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		},300 );
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 0){
			$('.up').slideDown(300);
		} else {
			$('.up').slideUp(300);
		};
	});

	/*******************************
	* ACCORDION WITH TOGGLE ICONS
	*******************************/
	function toggleIcon(e) {
		$(e.target)
			.prev('.panel-heading')
			.find(".more-less")
			.toggleClass('glyphicon-plus glyphicon-minus');
	}
	$('.panel-group').on('hidden.bs.collapse', toggleIcon);
	$('.panel-group').on('shown.bs.collapse', toggleIcon);




});

