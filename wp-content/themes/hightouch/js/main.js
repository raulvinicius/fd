$(document).ready(function()
{

	//ANIMAÇÃO POR SCROLL

	$( '#ico-open-menu' ).bind('click', function(e){
		e.preventDefault();
        varT = '#' + $( this ).attr('data-trigger');
        if ( $( varT ).hasClass('open') )
        {
        	$( varT ).removeClass('open');
        	$( varT + ' nav' ).css('right', '-300px');
        }
        else
        {
        	$( varT ).addClass('open');
        	$( varT + ' nav' ).css('right', '0');
        }
    });

	$( window ).scroll(function() 
	{

		$('.hided').each(function()
		{
			if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top )
			{
				$(this).addClass('appeared').removeClass('hided');
			}
		})

	});

	if( $( '#map' ).length > 0 )
	{
		initializeMap();
	}


	$( window ).scroll();

	nivelaHResultados();

	$('.tip').popover({
		animation: true
	});

	$('#page-contato #form form').submit(function(){return false}); 
	$('#page-contato #form form input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{
					$(form).hide();
					$('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});
				}, 
				rules: {
					nome: {
						required: true
					},
					email: {
						email: true,
						required: true
					},
					assunto: {
						required: true
					},
					mensagem: {
						required: true
					}
				},
				messages: {
					nome: {
						required: 'Campo obrigat&oacute;rio'
					},
					email: {
						email: 'E-mail inv&aacute;lido',
						required: 'Campo obrigat&oacute;rio'
					},
					assunto: {
						required: 'Campo obrigatório'
					},
					mensagem: {
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

})


function nivelaHResultados()
{
	var hSpan = 0;

	if( $('.page-single-case #wrap-objetivo-case .span4:first-child').css('float') == 'none' )
	{
		$('.page-single-case #wrap-objetivo-case .span4').css({
			'height': 'auto'
		});
	}
	else
	{
		$('.page-single-case #wrap-objetivo-case .span4').each(function()
		{
			hSpan = Math.max($(this).height(), hSpan);
		})
		$('.page-single-case #wrap-objetivo-case .span4').height(hSpan);
	}

}


function contatoOk (data)
{
	console.log($(this));
	console.log(data);

	$('#process').hide();
	$('#form-contato').show();

	if( data == 'erro')
	{
		$('.alert-error').show();
	}
	else if( data == 'sucesso')
	{
		$('.alert-success').show();
		$('#form-contato')[0].reset();
	}
}

function initializeMap()
{

	var myLatLgn = new google.maps.LatLng( -15.807839999999967,-47.899727 );

	var mapCanvas = document.getElementById( 'map' );
	var mapOptions = {
		center: myLatLgn,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: 'd5d5d5',
		scrollwheel: false,
		draggable: false,
		disableDoubleClickZoom: true,
		disableDefaultUI: true,
		streetViewControl: true
	}
	var map = new google.maps.Map( mapCanvas, mapOptions );

	var marker = new google.maps.Marker({
	    position: myLatLgn,
	    map: map
	});


/*	$('header').hide();
	$('#page-contato').css({
		'margin-top': '-103px'
	})

	$('#map').css({
		'height': '1080px'
	})

	$('html, body').css({
		overflow: 'hidden'
	})

	var myLatLgn = new google.maps.LatLng( -15.7905015,-47.8968235 );

	var mapCanvas = document.getElementById( 'map' );

	var styles = [
	  {
	    "elementType": "labels.text",
	    "stylers": [
	      { "visibility": "off" },
	      { "color": "#ed2f80" }
	    ]
	  },{
	    "featureType": "landscape",
	    "stylers": [
	      { "color": "#1f1f1f" }
	    ]
	  },{
	    "featureType": "road",
	    "stylers": [
	      { "color": "#000000" }
	    ]
	  },{
	    "featureType": "transit",
	    "stylers": [
	      { "color": "#000000" }
	    ]
	  },{
	    "featureType": "water",
	    "stylers": [
	      { "color": "#000000" }
	    ]
	  },{
	    "featureType": "poi.park",
	    "stylers": [
	      { "color": "#323232" }
	    ]
	  },{
	    "featureType": "poi",
	    "stylers": [
	      { "color": "#323232" }
	    ]
	  },{
	  }
	]

	var mapOptions = {
		center: myLatLgn,
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		backgroundColor: '1f1f1f',
		scrollwheel: false,
		draggable: false,
		disableDoubleClickZoom: true,
		disableDefaultUI: true,
		streetViewControl: false
	}

	var map = new google.maps.Map( mapCanvas, mapOptions );
	map.setOptions({styles: styles});
*/
}

