$(document).ready(function() {

	$("#slider_inincio").owlCarousel();

	for (var pais in paises) {
		$("#pais").append("<option value='"+paises[pais]+"' style='display:block;color:#001;' "+( paises[pais] == 'Venezuela' ? 'selected' : '')+" >"+paises[pais]+"</option>");
	}
	//FUNCIONALLITY OF CONTACTO SECTION

	$("#contacto-vm").on('click', function(event){

		event.preventDefault();

		$(this).addClass("active");

		//$("#contacto-desplegado").addClass("active");
		$("#contacto-desplegado").slideDown(2000,function(){
			$("html, body").animate({scrollTop: $("#pie").offset().top }, 600);			
		});

		$("#button-contacto-desplegado").addClass("active");		

	});



	$("#contacto-close").on('click', function(event){

		event.preventDefault();

		$("#contacto-vm").removeClass("active");

		//$("#contacto-desplegado").removeClass("active");
		$("#contacto-desplegado").slideUp(2000);

		$("#button-contacto-desplegado").removeClass("active");

	});

	//END FUNCIONALLITY OF CONTACTO SECTION


	//FUNCIONALLITY OF WEB PORTFOLIO SECTION
	/*	$("#diseno-desarrollo").on('click', function(event){
		$(".galeria-portafolio").removeClass("active");
		$(".portafolio-similitudes").removeClass("active");
		$("#portafolio .col-md-6").removeClass("active");
		$(this).addClass("active");
		$("#portafolio-detalles-web").addClass("active");
		galery_size();
		});*/

/**********************************************Codigo nuevo funcional********************************************************************/
    /*$('a[href^="#"]').click(function(e) {
	    e.preventDefault();
	    volver = $(this).attr("href");
	    $("html, body").animate({
	        scrollTop: $(volver).offset().top
	    }, 2000);
    });*/

	$(".trigger_porta").on('click', function(event){
		var self = $(this);
		event.preventDefault();
		$("#portafolio_detalles_general").fadeIn().css("height",$(document).height()+"px");
		$("#titulo_general_portafolio").html( self.find("h2.titulo_porta").html() );
		$("#titulo_general_portafolio_movil").html( self.find("h2.titulo_porta").html() );
		
		$(".anterior,.siguiente").css( "color" , self.data("color") + "!important" );

		//$(".galeria-portafolio.fuchsia .row.details").css({"background":self.data("color")+" !important"});	
		/*$("#watch_porta .item .row.details").css({background:self.data("color")+" !important"});*/
		var style_row_hover  = "<style>";
			style_row_hover += ".row.details{background:"+self.data("color")+" !important;}";
			style_row_hover += "</style>";
		$("dinamycstyle").html(style_row_hover);
		$("#titulo_general_portafolio").attr({"style":"color:"+self.data("color")+" !important"});		
		$("#titulo_general_portafolio_movil").attr({"style":"color:"+self.data("color")+" !important"});

		$.ajax({
		    url        : 'portafolio.php',
		    data       : { "id_serv" : self.data("id"),"pagina" : 4 },
		    type       : 'GET',
		    dataType   : 'json',
		    contentType: 'application/json;charset=UTF-8', 
		    beforeSend : function(){
		    	$("#watch_porta").html("<img src='assets/images/loader.gif' style='display:block;margin:auto;margin-top:15em;'>");
		    },
		    success : function(data) {
		    	$("#watch_porta").html(data.html);
		    	$("#numero_artes").html(data.num_rows+" Artes");
		    },
		    error : function(xhr, status) {
		        alert('Disculpe, existió un problema');
		    }
		}).done(function(){

			$("#portafolio_detalles_general div.container-fluid #watch_porta .row").on('click',".item", function(event){
				event.preventDefault();

				var this_imagen_item = $(this);
				
                var imagenes_zoom_portafolio  = '<img src="/art/portafolio/'+this_imagen_item.attr("data-imgzoom")+'">';
                	imagenes_zoom_portafolio += '<div class="row little-view">';

                	if(this_imagen_item.attr("data-imagenporta2")){
                		imagenes_zoom_portafolio += '<img src="/art/portafolio/'+this_imagen_item.attr("data-imagenporta2")+'">';
                	}

                	if(this_imagen_item.attr("data-imagenporta3")){
                		imagenes_zoom_portafolio += '<img src="/art/portafolio/'+this_imagen_item.attr("data-imagenporta3")+'">';
                	}

                	imagenes_zoom_portafolio += '</div>';

				$("#imagenes_detalle_porta").html(imagenes_zoom_portafolio);
				

				$("#tipoproyect").html( this_imagen_item.attr("data-serv_nombre")).attr({"style":"color:"+self.data("color")+" !important"});
				$("#proyecto_porta").html( this_imagen_item.attr("data-proyect")).attr({"style":"color:white !important"});
				$("#volver_galeria_porta").attr({"style":"color:"+self.data("color")+" !important"});

				$("#pais_year_porta").html( this_imagen_item.attr("data-pais")+"/"+this_imagen_item.attr("data-year"));	

				if( this_imagen_item.attr("data-url") == undefined || this_imagen_item.attr("data-url") == ""){
					$("#link_detalle_porta").hide();
				}else{
					$("#link_detalle_porta").show().attr("src",this_imagen_item.attr("data-url")).html('<img src="assets/images/general/vinculo.png" alt="Vinculo Icon"> k'+this_imagen_item.attr("data-url"));					
				}

				$("#portafolio_detalle_item").show("fast");//Mostrar Contenedor Portafolio detalle

				$(this).addClass("active");

			});	//Fin Evento click del item portafolio


			//Navegaciòn anterior siguiente:
			$(".anterior").on("click",function(e){
				e.preventDefault();

				var num = $("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item.active").data("num");
				var total_items = $("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item.active").data("total_items");
				num--;

				if( num == 1){
					num = total_items;
				}				

				$("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item").removeClass("active");

				$("#item-portafolio-"+num).addClass("active");

				$("#portafolio_detalle_item").hide("fast",function(){

					$("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item.active").trigger("click");
					
				});				

			});//Fin Evento anterior

			$(".siguiente").on("click",function(e){
				e.preventDefault();

				var num = $("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item.active").data("num");
				var total_items = $("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item.active").data("total_items");

				num++;

				if( num == total_items){
					num = 1;
				}

				$("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item").removeClass("active");

				$("#item-portafolio-"+num).addClass("active");

				$("#portafolio_detalle_item").hide("fast",function(){

					$("#watch_porta .row .col-xs-12.col-sm-4.col-md-4.item.active").trigger("click");

				});

			});//Fin evento siguiente

			$("#volver_galeria_porta").on("click",function(){
				$("#portafolio_detalle_item").fadeOut();
			});		
		});	//Fin  ajax.done

		$("html, body").animate({
	        scrollTop: $("#header").offset().top
	    }, 2000);	 

	});//Fin trigger Porta

	$("#portafolio_general_close,#portafolio_general_close_movil").on('click', function(event){

		event.preventDefault();
		$("#portafolio_detalles_general").fadeOut();

		$("html, body").animate({
	        scrollTop: $("#portafolio").offset().top
	    }, 2000);

	});

$(".foco_contacto").on("focus",function(){
	$("#mensajes_form_contacto").fadeOut();
});
$(".ventana").css(
	{
	"position": "fixed",
	"width": "100%",
	"height":"100%",
	"z-index":10,
	"top":0,
	"left":0,
	"background":"rgba(0,0,0,0.5)",
	"display":"none"
	});
$("#p_success_form_contact").css({
"position": "absolute",
"top": "0px",
"left": "0px",
"right": "0px",
"bottom": "0px",
"margin": "auto",
"color": "rgb(0, 0, 0)",
"font-size": "1.5em",
"background": "rgba(255,255,255,0.7)",
"width": "60%",
"padding": "2em",
"height": "30%",
"font-weight": "bold"
});
$("#boton_contacto").on("click",function(e){
	e.preventDefault();
	console.log($("#form_contact").serialize());
	if( $("#tipo_solicitud").val() =="" || $("#nombre_contacto").val() =="" || $("#email_contacto").val() =="" || $("#mensaje_contacto").val() =="" || $("#pais").val() =="" || $("#captcha").val() != 16)
	{

		$("#mensajes_form_contacto").fadeIn().html("Por rellene los campos requeridos e ingrese el valor correcto del campo antispam");

	}else{
		//$("#form_contact").submit();
		$.ajax({
			url        : $("#form_contact").attr("action"),
			data       : $("#form_contact").serialize(),
			type       : 'post',
			beforeSend : function(){
			   	$("#loader_form_contact").html("<img src='assets/images/loader.gif' style='display:block;margin:auto;margin-top:15em;'>").show("fast");
			},
			success : function(data) {
			  	$("#loader_form_contact").hide("fast");
			  	$("#p_success_form_contact").html("Su mensaje ha sido enviado con exito y sera respondido a la brevedad... ¡ gracias por contactarnos !");
			  	$("#success_form_contact").
			  	fadeIn('slow').
			  	delay(3000).
			  	fadeOut('fast'); 			  	
			},
			error : function(xhr, status) {
			    alert('Disculpe, existió un problema');
			}
		});	
	}
	
});
/**********************************************Codigo nuevo funcional********************************************************************/

	$("#portafolio-web-close").on('click', function(event){

		event.preventDefault();

		$("#diseno-desarrollo").removeClass("active");

		$("#portafolio-detalles-web").removeClass("active");

		$('#group').css('minHeight', 'initial');

	});



	$("#portafolio-detalles-web .item").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$("#portafolio-detalles-web").removeClass("active");

		$("#portafolio-web").addClass("active");

		details_size();

	});



	$("#volver-galeria-web").on('click', function(event){

		event.preventDefault();

		$("#portafolio-web").removeClass("active");

		$("#portafolio-detalles-web").addClass("active");

		galery_size();

	});

	//END FUNCIONALLITY OF WEB PORTFOLIO SECTION



	//FUNCIONALLITY OF BRANDING PORTFOLIO SECTION

	$("#branding-identidad").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$(this).addClass("active");

		$("#portafolio-detalles-branding").addClass("active");

		galery_size();

	});



	$("#portafolio-branding-close").on('click', function(event){

		event.preventDefault();

		$("#branding-identidad").removeClass("active")

		$("#portafolio-detalles-branding").removeClass("active");

		$('#group').css('minHeight', 'initial');

	});



	$("#portafolio-detalles-branding .item").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$("#portafolio-detalles-branding").removeClass("active");

		$("#portafolio-branding").addClass("active");

		details_size();

	});



	$("#volver-galeria-branding").on('click', function(event){

		event.preventDefault();

		$("#portafolio-branding").removeClass("active");

		$("#portafolio-detalles-branding").addClass("active");

		galery_size();

	});

	//END FUNCIONALLITY OF BRANDING PORTFOLIO SECTION



	//FUNCIONALLITY OF DESING PORTFOLIO SECTION

	$("#diseno-grafico").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$(this).addClass("active");

		$("#portafolio-detalles").addClass("active");

		galery_size();

	});



	$("#portafolio-close").on('click', function(event){

		event.preventDefault();

		$("#diseno-grafico").removeClass("active")

		$("#portafolio-detalles").removeClass("active");

		$('#group').css('minHeight', 'initial');

	});





	$("#portafolio-detalles .item").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$("#portafolio-detalles").removeClass("active");

		$("#portafolio-grafico").addClass("active");

		details_size();

	});



	$("#volver-galeria").on('click', function(event){

		event.preventDefault();

		$("#portafolio-grafico").removeClass("active");

		$("#portafolio-detalles").addClass("active");

		galery_size();

	});

	//FUNCIONALLITY OF DESING PORTFOLIO SECTION



	//FUNCIONALLITY OF SOCIAL PORTFOLIO SECTION

	$("#social-media").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$(this).addClass("active");

		$("#portafolio-detalles-media").addClass("active");

		galery_size();

	});



	$("#portafolio-media-close").on('click', function(event){

		event.preventDefault();

		$("#social-media").removeClass("active")

		$("#portafolio-detalles-media").removeClass("active");

		$('#group').css('minHeight', 'initial');

	});



	$("#portafolio-detalles-media .item").on('click', function(event){

		event.preventDefault();

		$(".galeria-portafolio").removeClass("active");

		$(".portafolio-similitudes").removeClass("active");

		$("#portafolio .col-md-6").removeClass("active");

		$("#portafolio-detalles-media").removeClass("active");

		$("#portafolio-media").addClass("active");

		details_size();

	});



	$("#volver-galeria-media").on('click', function(event){

		event.preventDefault();

		$("#portafolio-media").removeClass("active");

		$("#portafolio-detalles-media").addClass("active");

		galery_size();

	});

	//END FUNCIONALLITY OF MEDIA PORTFOLIO SECTION



	//FUNCIONALLITY FOR DINAMIC SIZE

	$(window).resize(function(){

		galery_size();

	});



	function galery_size(){

		var window_size = $(window).width();



		if(window_size >= 1024){

			var resize = $(".galeria-portafolio.active .container-fluid").height();

			var resize_noactive = $(".galeria-portafolio .container-fluid").height();

			$('#group').css('minHeight', resize);



			if(resize_noactive < 900){

				$("#portafolio .col-md-6").css('minHeight', '400px');

			}else{

				$("#portafolio .col-md-6").css('minHeight', '450px');

				$("#social-media .col-md-6").css('minHeight', '500px');

			}



		}else if(window_size >= 768 && window_size <= 991){

			var resize = $(".galeria-portafolio.active .container-fluid").height();

			$('#group').css('minHeight', resize);

		} 

	}



	function details_size(){

		var window_size = $(window).width();



		if(window_size >= 1024){

			var resize = $(".portafolio-similitudes.active .container-fluid").height();

			$('#group').css('minHeight', resize);



		}else if(window_size >= 768 && window_size <= 991){

			var resize = $(".portafolio-similitudes.active .container-fluid").height();

			$('#group').css('minHeight', resize);

		} 

	}

	//END FUNCIONALLITY FOR DINAMIC SIZE



	//FUNCIONALLITY OF PRINCIPAL MENU

	$(".button-menu").on('click', function(event){

		event.preventDefault();

		$("#left-menu").addClass("active");

	});



//FUNCIONALLITY OF COCONUT SECTION
	$("#coconut-vm").on('click', function(event){

		event.preventDefault();
		$(this).addClass("active");
		//$("#coconut-details").addClass("active");
		$("#coconut-details").slideDown(2000);
		$("#coconut-close").addClass("active");
		
		$("html, body").animate({scrollTop: $("#coconut-details").offset().top }, 600);		

	});


	$("#coconut-close").on('click', function(event){

		event.preventDefault();
		$(this).removeClass("active");
		//$("#coconut-details").removeClass("active");
		$("#coconut-details").slideUp(2000);
		$("#coconut-vm").removeClass("active");
		$("html, body").animate({scrollTop: $("#coconut").offset().top }, 600);			

	});

//END FUNCIONALLITY OF COCONUT SECTION

	$("#principal-menu-a").on('click',function(e){
		e.preventDefault();
		$("#menu_oculto_right").animate({ "margin-right": "0px"},"slow");
	});

	$("#close-button-a").on('click', function(event){

		event.preventDefault();

		//$("#left-menu").removeClass("active");
		$("#menu_oculto_right").animate({ "margin-right": "-5000px"},"slow");

	});	

	//END FUNCIONALLITY OF PRINCIPAL MENU



	//FUNCIONALLITY OF SECUNDARY MENU

	$(".button-options").on('click', function(event){

		event.preventDefault();

		var menu = $(this).data('options');



		switch(menu){

			case 1:

				$("#left-menu-pd-web").addClass("active");

			break;



			case 2:

				$("#left-menu-pd-branding").addClass("active");

			break;



			case 3:

				$("#left-menu-pd").addClass("active");

			break;



			case 4:

				$("#left-menu-pd-media").addClass("active");

			break;





			case 5:

				$("#left-menu-dw").addClass("active");

			break;



			case 6:

				$("#left-menu-branding").addClass("active");

			break;



			case 7:

				$("#left-menu-dg").addClass("active");

			break;



			case 8:

				$("#left-menu-media").addClass("active");

			break;

		}

		

	});



	$(".less-options-button").on('click', function(event){

		event.preventDefault();

		$(".left-menu-details").removeClass("active");

	});

	//END FUNCIONALLITY OF SECUNDARY MENU



	//FUNCIONALLITY OF VIDEO

	var video = document.getElementById("video-background");



	$("#play-button").on('click', function(event){

		event.preventDefault();

		$("#video-background").fadeIn('slow');

		$("#close-button-video").fadeIn('slow');



		if(video.paused){

			video.play();

		}else{

			video.pause();

		}

	});



	$("#close-button-video").on('click', function(event){

		if(video.paused){

			video.play();

		}else{

			video.pause();

		}



		$("#close-button-video").fadeOut('slow');

		$("#video-background").fadeOut('slow');

	});



	$(video).on('ended', function(){

    	$("#close-button-video").fadeOut('slow');

		$("#video-background").fadeOut('slow');

	});

	//END FUNCIONALLITY OF VIDEO



	//FUNCIONALLITY OF LANGUAGE BUTTONS

	$(".language-button").on('click', function(event){
		if($(this).hasClass("active")){
			$(".language-button").addClass("active");
			$(this).removeClass("active");
		}else{
			$(".language-button").removeClass("active");
			$(this).addClass("active");
		}
	});

	//END FUNCIONALLITY OF LANGUAGE BUTTONS



	//FUNCIONALLITY OF MENU POSITIONS

	$('#left-menu ul li a').on('click', function(event){

		event.preventDefault();
		$('#left-menu ul li a').removeClass("active");
		$(this).addClass("active");
		var position = $(this).data('position');

		switch(position){
			case 1:
				var home = $("#header").offset().top;
				$("html, body").animate({scrollTop: home}, 600);
			break;
			case 2:
				var us = $("#coconut").offset().top;
				$("html, body").animate({scrollTop: us}, 600);
			break;
			case 3:
				var portfolio = $("#group").offset().top;
				$("html, body").animate({scrollTop: portfolio}, 600);
			break;

			case 4:
				var contact = $("#contacto").offset().top;
				$("html, body").animate({scrollTop: contact}, 600);
			break;
		}

    });

    //END FUNCIONALLITY OF MENU POSITIONS



    //POSICIONAMIENTO

    var home_menu = $("#header").offset().top;

	var coc_menu = $("#coconut").offset().top;

   	var por_menu = $("#group").offset().top;

   	var con_menu = $("#contacto").offset().top;

   	var w_altura = $(window).height();

    var d_altura = $(document).height();



    $(document).on('scroll', function(event){

    	var posicion = $(document).scrollTop();



    	if(posicion >= home_menu){

    		$("#left-menu ul li a").removeClass("active");

    		$("#left-menu ul li:first-of-type a").addClass("active");

    	}



    	if(posicion >= coc_menu){

    		$("#left-menu ul li a").removeClass("active");

    		$("#left-menu ul li:nth-of-type(2) a").addClass("active");

    	}



    	if(posicion >= por_menu){

    		$("#left-menu ul li a").removeClass("active");

    		$("#left-menu ul li:nth-of-type(3) a").addClass("active");

    	}



    	if(w_altura + posicion == d_altura){

    		$("#left-menu ul li a").removeClass("active");

    		$("#left-menu ul li:nth-of-type(4) a").addClass("active");

    	}

    });   

});