$(document).ready(function() {


	$( window ).scroll(function() 
	{
		setTimeout(showInAnimation,400);
	});
	$( window ).trigger('scroll');


	$( window ).resize(function(e) 
	{
		//do something
	});
	$( window ).trigger('resize');


	$('#play').on('click', function () {
		$('.theater').show();
	});

	$('.theater #bt-fechar').on('click', function () {
		$('.theater').hide();
	});


	//-----------------VIDEO HOME-----------------//

	$(window).on('load resize', function(){
	  vidRescale();
	});

	//-----------------VIDEO HOME-----------------//




	//-----------------PARALLAXES-----------------//
	$('.bg-parallax')
	.css('background-attachment', 'fixed')
	.each(function(){
		var $obj = $(this);

		$(window).scroll(function() {

			var yPos = -($obj.offset().top +( $(window).scrollTop() / $obj.data("speed"))); 
	 
			var bgpos = '50% '+ yPos + 'px';
 
			$obj.css('background-position', bgpos );
	 
		}); 
	});
	//-----------------PARALLAXES-----------------//

	



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
		var iMaxApresentacao = $('.apresentacao ul li').length;

		setInterval(function()
		{

			if(iApresentacao < iMaxApresentacao)
			{
				$('.apresentacao ul li').removeClass('highlight');
				$('.apresentacao ul li:nth-child(' + iApresentacao + ')').addClass('highlight');
				iApresentacao++;
			}
			else if(iApresentacao == iMaxApresentacao)
			{
				$('.apresentacao ul li').removeClass('highlight');
				$('.apresentacao ul li:last-child').addClass('highlight');
				iApresentacao = 1;
			}

		}, 7000)
	}

	//-----------------RODA CONQUISTAS-----------------//





	//-----------------CAROUSSEL-----------------//

		var iFrases = 1;
		var maxFrases = $('.frases .carousel').find('li').length;

		setInterval(function()
		{

			$('.frases .carousel li').removeClass('highlight');
			$('.frases .carousel li:nth-child(' + iFrases  + ')').addClass('highlight');
			$('.frases .carousel .contador-ferds #item').removeClass('highlight');
			$('.frases .carousel .contador-ferds #item:nth-child(' + parseInt(iFrases+1) + ')').addClass('highlight');
			
			if( iFrases < maxFrases )
			{
				iFrases++;
			}
			else if(iFrases == maxFrases)
			{
				// $('.frases .carousel li:last-child').addClass('highlight');
				iFrases = 1;
			}


		}, 7000)



		var iDepoimentos = 1;
		var maxDepoimentos = $('.depoimentos .carousel').find('li').length;

		setInterval(function()
		{

			$('.depoimentos .carousel li').removeClass('highlight');
			$('.depoimentos .carousel li:nth-child(' + iFrases  + ')').addClass('highlight');
			$('.depoimentos .carousel .contador-ferds #item').removeClass('highlight');
			$('.depoimentos .carousel .contador-ferds #item:nth-child(' + parseInt(iFrases+1) + ')').addClass('highlight');

			if( iDepoimentos < maxDepoimentos )
			{
				iDepoimentos++;
			}
			else if(iDepoimentos == maxDepoimentos)
			{
				iDepoimentos = 1;
			}

		}, 7000)


	//-----------------CAROUSSEL-----------------//





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
			console.log($(this).unbind('click'))
		});
	});

	//-----------------MENU-----------------//





	//-----------------CONTATO-----------------//

	$('.contato form #assunto label').on('click', function(){
		$('.contato form #assunto input').removeAttr('checked');
		$('.contato form #assunto label').attr({
			id: ''
		});
		$(this).attr('id', 'checked');
		$('.contato form #assunto label[for="' + $(this).attr('for') + '"]').attr('checked', 'checked')
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

					$(form).find('#success').hide();
					$(form).find('#error').hide();
					$(form).find('.form-text').hide();
					$(form).find('fieldset').hide();
					$(form).find('.form-text').hide();
					$(form).find('input[type=submit]').hide();

					$(form).find('#process').show();

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

}); //end $(document).ready

function contatoOk (data)
{
	console.log($(this));
	console.log(data);

	$('#contato #process').hide();
	$('#contato form fieldset').show();
	$('#contato form .form-text').show();
	$('#contato form input[type=submit]').show();


	if( data == 'sucesso')
	{
		$('#contato form #success').show();
		$('#contato form')[0].reset();
	}
	else
	{
		$('#contato form #error').show();
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


//-----------------VIDEO HOME-----------------//

var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var tv;
var playerDefaults = {autoplay: 0, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
var vid = [
			{'videoId': 'xQQ0PFpMVcw', 'startSeconds': 14, 'endSeconds': 47, 'suggestedQuality': 'hd720'},
			{'videoId': 'kHrqJGckWME', 'startSeconds': 24, 'endSeconds': 35, 'suggestedQuality': 'hd720'},
			{'videoId': 'kHrqJGckWME', 'startSeconds': 6, 'endSeconds': 15, 'suggestedQuality': 'hd720'},
		],
		randomVid = Math.floor(Math.random() * vid.length),
    currVid = randomVid;

function onYouTubePlayerAPIReady(){
	tv = new YT.Player('tv', {events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, playerVars: playerDefaults});
}

function onPlayerReady(){
  tv.loadVideoById(vid[currVid]);
  tv.mute();
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

//-----------------VIDEO HOME-----------------//