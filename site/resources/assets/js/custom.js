$(document).ready(function(){

	$('#lightgallery').lightGallery();

	$('.carousel').carousel();

	$('.portfolio-item a').hover(function(){
		$(this).children().children('.img-fluid').addClass('hover-img');
	}, function(){
		$(this).children().children('.img-fluid').removeClass('hover-img');
	});

	window.sr = ScrollReveal();
	sr.reveal('.sr-ecos',{
		duration: 2000,
		distance: '10px',
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
	},200);

	if($('.estrutura-div').length > 0){
		$('.estrutura-div').css('top',$('.background-text').height()+470);

		$('.first-content').height($('.estrutura-div').height()+$('.estrutura-div').offset().top -20);
		console.log($('.estrutura-div').offset().top);
	}


	//Serviços
	$('#fullPageSinglePage').fullpage();

	$('#fullPageMultPage').fullpage({	
		scrollingSpeed: 1000,
		anchors:['zeroPage', 'firstPage', 'secondPage', 'thirdPage'],
		afterLoad: function(anchorLink, index){
			if(index == 1){
				$('body').css('background-color','white');
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
		},
		onLeave: function(index, nextIndex, direction){
			if(nextIndex == 1){
				$('body').css('background-color','white');
				$('#section0').css("display","none");
				setTimeout(function(){
					$('#section0').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#EC0500');
				$('.barra-botoes').show();
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
			if(nextIndex == 2){
				$('body').css('background-color','#34495e');
				$('#section0').css("display","none");
				setTimeout(function(){
					$('#section0').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#34495e');
				$('.barra-botoes').hide();
				$('.arrow-down').show();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#secondPage");
				$("#arrowUp").attr("href", "#zeroPage");
			}
			else if(nextIndex == 3){
				$('body').css('background-color','#EB5055');
				$('#section1').css("display","none");
				setTimeout(function(){
					$('#section1').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#EB5055');
				$('.barra-botoes').hide();
				$('.arrow-down').show();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#thirdPage");
				$("#arrowUp").attr("href", "#firstPage");
			}
			else if(nextIndex == 4){
				$('body').css('background-color','#eee');
				$('#section2').css("display","none");
				setTimeout(function(){
					$('#section2').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#EC0500');
				$('.barra-botoes').hide();
				$('.arrow-down').hide();
				$('.arrow-up').show();
				$("#arrowUp").attr("href", "#secondPage");
			}

		}
	});

	$('#fullPageMultPage2').fullpage({	
		scrollingSpeed: 1000,
		anchors:['zeroPage', 'firstPage', 'secondPage', 'thirdPage'],
		afterLoad: function(anchorLink, index){
			if(index == 1){
				$('body').css('background-color','white');
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
		},
		onLeave: function(index, nextIndex, direction){
			if(nextIndex == 1){
				$('body').css('background-color','white');
				$('#section0').css("display","none");
				setTimeout(function(){
					$('#section0').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#EC0500');
				$('.barra-botoes').show();
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
			if(nextIndex == 2){
				$('body').css('background-color','#34495e');
				$('#section0').css("display","none");
				setTimeout(function(){
					$('#section0').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#34495e');
				$('.barra-botoes').hide();
				$('.arrow-down').show();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#secondPage");
				$("#arrowUp").attr("href", "#zeroPage");
			}
			else if(nextIndex == 3){
				$('body').css('background-color','#EB5055');
				$('#section1').css("display","none");
				setTimeout(function(){
					$('#section1').css("display","block");
				}, 100);
				$('.navbar').css('background-color','#EB5055');
				$('.barra-botoes').hide();
				$('.arrow-down').hide();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#thirdPage");
				$("#arrowUp").attr("href", "#firstPage");
			}

		}
	});


});