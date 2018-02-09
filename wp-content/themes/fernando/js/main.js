$(document).ready(function() {


	initCustomScroll();
	initBGParallax();

	$( window ).scroll(function() 
	{
		setTimeout(showInAnimation,400);

		if( $(window).scrollTop() > 200 )
		{
			$('.go-top').addClass('up');
		}
		else
		{
			$('.go-top').removeClass('up');
		}

		if( $('.pagina.quem-sou').length > 0 )
		{
			$('.quem-sou .timeline li.row').each(function()
			{
				if ($(window).scrollTop() >= $(this).offset().top - ($(window).height() * 0.5) && $(window).scrollTop() < $(this).offset().top )
				{
					$(this).addClass('focus');
				}
				else
				{
					$(this).removeClass('focus');
				}
			})
		}

		if( $('.fd-depoimentos').length > 0 )
		{
			ajustaAlturaBoxDepoimentos();
		}




		// BG RUMO AO TOPO----------------------

		scrollBgRt();

		// BG RUMO AO TOPO----------------------

		
		// SEMENTES DOS DELIONS----------------------
		doCustomScroll();

		// EXECUTA PARALLAXES--------------------
		doBGParallax();


	});
	$( window ).trigger('scroll');


	$( window ).resize(function(e) 
	{

		//-----------------FULL HEIGHT-----------------//

		$('.full-h').each(function() {
			$(this).css('height', 'auto')
			var offset = 0;
			var unit = 'px';
			if( $(this).attr('data-offset-fh') != undefined )
			{
				offset = $(this).attr('data-offset-fh');
				
				if( $(this).attr('data-offset-fh').indexOf('%') >= 0 )
				{
					unit = '%';
				}
			}

			if( unit == 'px')
			{
				$(this).height($(window).height() - parseInt(offset));
			}
			else
			{
				$(this).height($(window).height() - ($(window).height() * (parseInt(offset) / 100) ) );
			}
		});

		//-----------------FULL HEIGHT-----------------//


		//-----------------MAX SCROLL-----------------//

		maxScroll = $(document).height() - ( $(window).height() + $('.rumo-ao-topo .depoimentos').outerHeight() + $('.rumo-ao-topo .form-contato').outerHeight() );

		//-----------------MAX SCROLL-----------------//


		// MENU BATE-PAPOS----------------------

		if ( window.innerWidth > 767 ) 
		{
			$('.bate-papo #menu-produto').removeClass('aberto');
		};

		// MENU BATE-PAPOS----------------------


		//-----------------DEPOIMENTOS-----------------//

		if( $('.fd-depoimentos').length > 0 )
		{
			ajustaAlturaBoxDepoimentos();
		}

		//-----------------DEPOIMENTOS-----------------//


		//-----------------SCROLL BG RT-----------------//

		scrollBgRt();

		//-----------------SCROLL BG RT-----------------//



	});
	$( window ).trigger('resize');



	//-----------------BOTÃO GOTOP-----------------//
	$('.go-top').on('click', function() {
		$("html, body").animate({scrollTop: 0}, 800);
	});

	$('.play-ferds').on('click', function () {
		$('.theater').show();
		console.log($(this).attr('data-s'));
		st = 0;
		if( $(this).attr('data-s') != undefined)
		{
			st = $(this).attr('data-s');
		}

		vid = [
				{'videoId': $(this).attr('data-id'), 'startSeconds': st, 'suggestedQuality': 'hd720'},
			];

		theater.loadVideoById(vid[0]);
		theaterRescale();
		// theater.mute();
	});	

	$('.theater #bt-fechar').on('click', function () {
		$('.theater').hide();
		theater.stopVideo();
	});
	//-----------------BOTÃO GOTOP-----------------//


	
	

	//-----------------ANCORA FERDS-----------------//

	$('.ancora-ferds').on('click', function(event, el) {
		event.preventDefault();
		url = $(this).attr('href');
		url = url.split('#');
		url = url[url.length - 1];
		$("html, body").animate({scrollTop: $('#' + url).offset().top}, 600);

	});

	//-----------------ANCORA FERDS-----------------//




	//-----------------CONTADOR FERDS-----------------//

	$('.contador-ferds #ant').on('click', function() {

		// t = parseInt( $(this).closest('.carousel').attr('data-t') );
		// clearInterval( intervals[ $(this).closest('.carousel').attr('data-int') ]);
		changeItemCarousel($(this).closest('.carousel'), 'volta');
		// intervals[ $(this).closest('.carousel').attr('data-int') ] = setInterval( changeItemCarousel, t, $(this).closest('.carousel') );

	});

	$('.contador-ferds #pro').on('click', function() {

		// t = parseInt( $(this).closest('.carousel').attr('data-t') );
		// clearInterval( intervals[ $(this).closest('.carousel').attr('data-int') ]);
		changeItemCarousel($(this).closest('.carousel'));
		// intervals[ $(this).closest('.carousel').attr('data-int') ] = setInterval( changeItemCarousel, t, $(this).closest('.carousel') );

	});

	//-----------------CONTADOR FERDS-----------------//


	
	

	//-----------------INPUT HOME-----------------//

	$('.home .solucoes input').on('change input keyup paste', function(event) {
		if( $(this).val() != '' )
		{
			$(this)
				.closest('#w-input-solucao')
				.addClass('ativo')
				.find('li')
				.hide()
				.closest('#w-input-solucao')
				.find('li:contains("'+ $(this).val() +'")')
				.show();
		}
		else
		{
			$(this)
				.closest('#w-input-solucao')
				.removeClass('ativo')
				
			//mostra todos os produtos
			$('.home .solucoes .produtos li').show();
		}
	});

	$('.home .solucoes #w-input-solucao #bt-limpa').on('click', function(event) {
		$(this)
			.hide()
			.closest('#w-input-solucao')
			.removeClass('ativo')
			.find('input')
			.val('');

		//mostra todos os produtos
		$('.home .solucoes .produtos li').show();

	});

	$('.home .solucoes #w-input-solucao li button').on('click', function() {

		$(this)
			.closest('#w-input-solucao')
			.removeClass('ativo')
			.find('#bt-limpa')
			.show()
			.closest('#w-input-solucao')
			.find('input')
			.val($(this).text().toLowerCase())

		$('.home .solucoes .produtos li').hide();
		$('.home .solucoes .produtos .produto[data-i*="' + $(this).data('i') + '"]')
			.closest('li')
			.show();
	});

	//-----------------INPUT HOME-----------------//




	//-----------------VIDEO HOME-----------------//

	$(window).on('load resize', function(){
		if($('.pagina.home').length > 0)
		{
			vidRescale();
			theaterRescale();
		}
	});

	//-----------------VIDEO HOME-----------------//

	



	//-----------------SOLUCOES HOME-----------------//

	$('.home .solucoes .produto').hover(function(event) {
		$(this)
			.closest('ul')
			.find('li .conteudo i, li .conteudo p')
			.css('opacity', '0.5');
		$(this)
			.find('.conteudo i, .conteudo p')
			.css('opacity', '1');
	},
	function(event) {
		$(this)
			.closest('ul')
			.find('li .conteudo i, li .conteudo p')
			.css('opacity', '1');
	});

	//-----------------SOLUCOES HOME-----------------//




	//-----------------MENU BATE-PAPOS-----------------//

	$('.bate-papo #menu-produto #abre-menu').on('click', function() {
		$(this).closest('#menu-produto').addClass('aberto');
	});

	$('.bate-papo #menu-produto #fecha-menu').on('click', function() {
		$(this).closest('#menu-produto').removeClass('aberto');
	});

	$('.bate-papo #menu-produto li a').on('click', function() {
		if (window.innerWidth <= 767) 
		{
			$(this).closest('#menu-produto').removeClass('aberto');
		};
	});

	//-----------------MENU BATE-PAPOS-----------------//

	



	//-----------------MASONRY-----------------//
/*
	var grid = $('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-item'
	});

	function callMasonry ()
	{
		grid.masonry();
	}
	
	setInterval( callMasonry, 2000 );
*/
	//-----------------MASONRY-----------------//




	//-----------------RODA CONQUISTAS-----------------//

	if ( $('section.apresentacao').length > 0 )
	{
		var iApresentacao = 1;
		var maxApresentacao = $('.apresentacao ul li').length;

		setInterval(function()
		{

			if(iApresentacao < maxApresentacao)
			{
				$('.apresentacao ul li').removeClass('highlight');
				$('.apresentacao ul li:nth-child(' + iApresentacao + ')').addClass('highlight');
				iApresentacao++;
			}
			else if(iApresentacao == maxApresentacao)
			{
				$('.apresentacao ul li').removeClass('highlight');
				$('.apresentacao ul li:last-child').addClass('highlight');
				iApresentacao = 1;
			}

		}, 7000)
	}

	//-----------------RODA CONQUISTAS-----------------//





	//-----------------CAROUSSEL-----------------//

	if( $('.pagina.home').length > 0 )
	{
		var iFrases = 1;
		var maxFrases = $('.frases .carousel').find('li').length;
		if( $('.frases .carousel').attr('data-t') == undefined )
		{
			$('.frases .carousel').attr('data-t', '7000')
		}
		$('.frases .carousel').attr('data-i', iFrases);
		$('.frases .carousel ul li:first-child').addClass('highlight');
		$('.frases .carousel .contador-ferds #item:nth-child(2)').addClass('highlight');

		if(maxFrases > 1)
		{
			$('.frases .carousel').attr('data-int', 'intFrases');
			//insere uma variável de intervalo no objeto para ser acessada dinamicamente
			intervals['intFrases'] = setInterval(changeItemCarousel, parseInt( $('.home .frases .carousel').attr('data-t') ), $('.home .frases .carousel'));
		}
		else
		{
			$('.frases .contador-ferds').hide();
		}
	}



	if( $('.fd-depoimentos').length > 0 )
	{
		var iDepoimentos = 1;
		var maxDepoimentos = $('.fd-depoimentos .carousel').find('li').length;
		if( $('.fd-depoimentos .carousel').attr('data-t') == undefined )
		{
			$('.fd-depoimentos .carousel').attr('data-t', '7000')
		}
		$('.fd-depoimentos .carousel').attr('data-i', iDepoimentos);
		$('.fd-depoimentos .carousel ul li:first-child').addClass('highlight');

		if(maxDepoimentos > 1)
		{
			$('.fd-depoimentos .carousel').attr('data-int', 'intDepoimentos');
			//insere uma variável de intervalo no objeto para ser acessada dinamicamente
			// intervals['intDepoimentos'] = setInterval(changeItemCarousel, parseInt( $('.fd-depoimentos .carousel').attr('data-t') ), $('.fd-depoimentos .carousel'));
		}
		else
		{
			$('.fd-depoimentos .contador-ferds').hide();
		}
	}

	//-----------------CAROUSSEL-----------------//





	//-----------------DEPOIMENTOS-----------------//

	if( $('.fd-depoimentos').length > 0 )
	{
		ajustaAlturaBoxDepoimentos();
		initCarousel();
	}

	//-----------------DEPOIMENTOS-----------------//





	//-----------------MENU-----------------//

	$('.menu .submenu .click').on('click', function(event) 
	{
		event.preventDefault();
		event.stopPropagation();

		if ( $(this).closest('.submenu').hasClass('aberto') )
		{
			$(this).closest('.submenu').removeClass('aberto');
		}
		else
		{
			$(this).closest('.submenu').addClass('aberto');
		}
	});

	$('.menu .submenu .click').on('mouseup', function(event) 
	{
		$('body').bind('click', function(event) {

			$('.menu .submenu').removeClass('aberto');
			// console.log($(this).unbind('click'))
		});
	});

	//-----------------MENU-----------------//





	//-----------------CONTATO-----------------//

	$('.form-contato form #assunto label').on('click', function(){
		$('.form-contato form #assunto input').removeAttr('checked');
		$('.form-contato form #assunto label').attr({
			id: ''
		});
		$(this).attr('id', 'checked');
		$('.form-contato form #assunto label[for="' + $(this).attr('for') + '"]').attr('checked', 'checked')
	})

	//-----------------CONTATO-----------------//






	$( 'body' ).on( 'click', 'header .menu.fechado #menu-btn', abreMenu );
	$( 'body' ).on( 'click', 'header .menu.aberto #menu-btn', fechaMenu );

	$( 'body' ).on( 'click', 'button.dead', function(){ return false; } );
	
	if( $( '#map-canvas' ).length > 0 )
	{
		initializeMap();
	}


	$('.segredo').remove();


	$( '.telefone' ).mask('(00) 0000 0000', {placeholder: "(__) ____ ____"});
	//incluindo o nono dígito
	var maskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '00 00000 0000' : '00 0000 00009';
	}

	options = {
		onKeyPress: function(val, e, field, options) {
			field.mask(maskBehavior.apply({}, arguments), options);
		},
		placeholder: "__ ____ ____"
	};
	 
	$('.celular').mask(maskBehavior, options);
	$( '.data' ).mask('00/00/0000', {placeholder: "__/__/____"});


	$('form.js').submit(function(e){return false;e.preventDefault();});

	$('form.js input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form).find('#notificacoes')
						.css('pointer-events', 'auto');

					$(form).find('#notificacoes #processando')
						.css('margin-left', '0');

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});

				}, 
				rules: {
					nm: {
						required: true
					},
					ml: {
						email: true,
						required: true
					},
					msgm: {
						required: true
					}
				},
				messages: {
					nm: {
						required: 'Campo obrigatório'
					},
					ml: {
						email: 'E-mail inválido',
						required: 'Campo obrigatório'
					},
					msgm: {
						required: 'Deixe sua mensagem'
					}
				}
			});
		}
	)

	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})

	$('form #notificacoes #fecha-notificacao').on('click', function() 
	{
		$(this).closest('#notificacoes').find('#processando')
			.css('margin-left', '100%');
		$(this).closest('#notificacoes').find('#sucesso')
			.css('margin-left', '100%');
		$(this).closest('#notificacoes').find('#erro')
			.css('margin-left', '100%');
		$(this).closest('#notificacoes').css('pointer-events', 'none');
		$(this).closest('form').find('input[type="submit"]')
			.removeAttr('disabled')
			.removeClass('disabled');
	});



}); //end $(document).ready

var maxScroll = $(document).height() - ( $(window).height() + $('.rumo-ao-topo .depoimentos').outerHeight() + $('.rumo-ao-topo .form-contato').outerHeight() );
var hBgRt = 2031 - $(window).height();
var intervals = [];

function contatoOk (data)
{
	console.log($(this));
	console.log(data);

	if( data == 'sucesso')
	{
		$('#contato form #notificacoes #sucesso')
			.css('margin-left', '0');

		$('#contato form')[0].reset();
	}
	else
	{
		$('#contato form #notificacoes #erro')
			.css('margin-left', '0');
	}

}

function URLize (s) 
{
    var r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"");
    return r;
};

function pluralize (s, p, n)
{
	if( n != 1)
	{
		return p;
	}
	else
	{
		return s;
	}
}

function initializeMap()
{

	var myLatLgn = new google.maps.LatLng( -16.675207,-49.260501 );

	var mapCanvas = document.getElementById( 'map-canvas' );
	var mapOptions = {
		center: myLatLgn,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: '7030a0',
		scrollwheel: false
	}
	var map = new google.maps.Map( mapCanvas, mapOptions );

	var marker = new google.maps.Marker({
	    position: myLatLgn,
	    map: map,
	    title:"Hello World!"
	});

}

function showInAnimation () 
{

	$('.hided').each(function()
	{
		if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top - 300 )
		{
			$(this).addClass('appeared').removeClass('hided');
		}
	})
}

function abreMenu()
{
	console.log('abre')
	$('header .menu.fechado')
		.removeClass('fechado')
		.addClass('aberto');
}

function fechaMenu()
{
	console.log('fecha')
	$('header .menu.aberto')
		.removeClass('aberto')
		.addClass('fechado');
}

function initCarousel()
{
	$('.carousel').each( function()
	{
		var c = $(this);
		var l = c.find('ul li').length;
		for (var i = l - 2; i >= 0; i--) 
		{
			$('.fd-depoimentos .contador-ferds #w-itens').append(
				$('.fd-depoimentos .contador-ferds #item:first-child').clone()
			);
		};
		$('.fd-depoimentos .carousel .contador-ferds #w-itens #item:first-child').addClass('highlight');
	});
}

function changeItemCarousel(carousel, direcao)
{
	max = carousel.find('li').length;
	i = parseInt( carousel.attr('data-i') );
	
	if( direcao == undefined )
	{
		if( i < max )
		{
			i++;
		}
		else
		{
			i = 1;
		}
	}
	else
	{
		if( i > 1 )
		{
			i--;
		}
		else
		{
			i = max;
		}
	}

	carousel.find('li').removeClass('highlight');
	carousel.find('li:nth-child(' + i  + ')').addClass('highlight');
	carousel.find('.contador-ferds #item').removeClass('highlight');
	carousel.find('.contador-ferds #item:nth-child(' + parseInt(i) + ')').addClass('highlight');

	$(carousel).attr('data-i', i);

}

function ajustaAlturaBoxDepoimentos()
{
	var hDepoimentos = Array();
	var tHeight = 0;

	$('.fd-depoimentos .carousel li').each(function() {

		tHeight = $(this).outerHeight();
		tHeight += parseInt($(this).css('margin-top'));
		tHeight += parseInt($(this).css('margin-bottom'));

		tHeight += $('.carousel img').outerHeight();

		if ( $('.fd-depoimentos #inner img').length > 0 )
		{
			tHeight += $('.fd-depoimentos #inner img').outerHeight();
			tHeight += parseInt($('.fd-depoimentos #inner img').css('margin-top'));
			tHeight += parseInt($('.fd-depoimentos #inner img').css('margin-bottom'));
		}

		tHeight += parseInt($('.fd-depoimentos .carousel').css('padding-top'));
		tHeight += parseInt($('.fd-depoimentos .carousel').css('padding-bottom'));
		tHeight += parseInt($('.fd-depoimentos .carousel').css('border-bottom-width'));

		tHeight += 20;

		hDepoimentos.push(tHeight);
	});

	hDepoimentos = Math.max.apply( Math, hDepoimentos );
	$('.fd-depoimentos .carousel').css('height',  hDepoimentos + "px" );
	hDepoimentos = undefined;
	tHeight = undefined;
}

//-----------------VIDEO HOME-----------------//

var tag = document.createElement('script');
	tag.src = 'https://www.youtube.com/player_api';

var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var theater;
var tv;

var playerDefaults = {autoplay: 0, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};

var vid = [
			{'videoId': 'xMY4FOiDl3M', 'startSeconds': 70, 'endSeconds': 107, 'suggestedQuality': 'hd720'},
		],
	randomVid = 0,
    currVid = randomVid;

var vidTheater = [
			{'videoId': 'xQQ0PFpMVcw', 'startSeconds': 0, 'suggestedQuality': 'hd720'},
		],
    currVidTheater = 0;

function onYouTubePlayerAPIReady(){
	theater = new YT.Player('theater', {events: {}, playerVars: playerDefaults});
	if($('.home #tv').length > 0)
	{
		tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
	}
}

function onPlayerReady(){
  tv.loadVideoById(vid[currVid]);
  tv.mute();
}

function onPlayerReadyTheater(){
	theaterRescale();
}

function onPlayerStateChange(e) {
  if (e.data === 1)
  {
    $('#tv').addClass('active');
  }
  else if (e.data === 2)
  {
    $('#tv').removeClass('active');
    if(currVid === vid.length - 1){
      currVid = 0;
    } else {
      currVid++;  
    }
    tv.loadVideoById(vid[currVid]);
    tv.seekTo(vid[currVid].startSeconds);
  }
}

function vidRescale(){

  var w = $(window).width()+200,
    h = $(window).height()+200;

  if (w/h > 16/9){
    tv.setSize(w, w/16*9);
    $('.tv .screen').css({'left': '0px'});
  } else {
    tv.setSize(h/9*16, h);
    $('.tv .screen').css({'left': -($('.tv .screen').outerWidth()-w)/2});
  }
}

function theaterRescale(){

  var w = $(window).width()-200,
    h = $(window).height()-200;

  if (w/h < 16/9){
    theater.setSize(w, w/16*9);
    $('.theater #theater').css({'left': '0px'});
  } else {
    theater.setSize(h/9*16, h);
    $('.theater #theater').css({'left': -($('.theater #screen').outerWidth()-w)/2});
  }
}

//-----------------VIDEO HOME-----------------//


//-----------------BG PARALLAX-----------------//

function initBGParallax ()
{
	$('.bg-parallax')
	.css('background-attachment', 'fixed')
	.each(function() {
		$(this).attr('data-ini-y', $(this).css('background-position-y'));
	})
}

function doBGParallax ()
{
	$('.bg-parallax')
	.each(function(){
		var $obj = $(this);
		var yPos = parseInt($(this).css('background-position-y')) ;
		yPos =- ($obj.offset().top +( $(window).scrollTop() / $obj.data("speed"))); 
		var bgpos = '50% '+ yPos + 'px';

 

		$obj.css({
			'-ms-background-position-y': yPos, 
			'background-position-y': yPos, 
		});

		console.log($(this).css('background-position-y'))
	 
	});
}

//-----------------BG PARALLAX-----------------//


//-----------------CUSTOM SCROLL-----------------//

function initCustomScroll ()
{
	doCustomScroll();
}

function doCustomScroll ()
{
	var wScroll = $(window).scrollTop();
	$('.custom-scroll').each(function() {
		$(this).css({
			'transform'	:	'translate(0px,' + wScroll * $(this).attr('data-scroll-speed') + 'px)',
		})
	});
	wScroll = undefined;
}

//-----------------CUSTOM SCROLL-----------------//



//-----------------SCROLL BG RT-----------------//

function scrollBgRt ()
{
	if( $('.pagina.rumo-ao-topo').length > 0 && window.innerWidth >= 992 )
	{

		varPctScroll = ($(window).scrollTop() / maxScroll);
		pctPosBg = (varPctScroll - 1) * hBgRt;
		$('.pagina.rumo-ao-topo .mapa').css('background-position-y', Math.min(0, parseInt(pctPosBg)) + 'px')
		$('.pagina.rumo-ao-topo .nuvens').css('background-position-y', Math.min(0, parseInt(pctPosBg * 2)) + 'px')

	}
}

//-----------------SCROLL BG RT-----------------//



// OVERWRITES old selecor
jQuery.expr[':'].contains = function(a, i, m) {
  return jQuery(a).text().toUpperCase()
      .indexOf(m[3].toUpperCase()) >= 0;
};
