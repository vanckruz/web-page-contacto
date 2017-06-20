<?php if (isset($_GET['en'])) {
    include 'english.php';
}else{
    include 'spanish.php';    
} ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>COCONUT</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <dinamycstyle></dinamycstyle>
    </head>
    <body>
        
        <a title="Desplegar Menú" alt="Link to Desplegar Menú" class="button-menu" id="principal-menu-a"><?=$idioma['menu'];?></a>

        <header>
            <section id="header">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-4 logo">
                            <a href="index.html" alt="Link to Home"><img src="assets/images/general/coconut-logo.png" title="Coconut Creativo" alt="Coconut Logo"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 language">
                            <a href="index.php?es" title="Español" alt="Link to Ver en Español" class="language-button <?=( !isset($_GET['en']) ? 'active' : '' )?>">es</a>
                            <a href="index.php?en" title="English" alt="Link to View in English" class="language-button <?=( isset($_GET['en']) ? 'active' : '' )?>">en</a>
                        </div>                       
                    </div>
                </div>
            </div>
        </section>

<?php //Slider ?>
<div id="sliderFull" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#sliderFull" data-slide-to="0" class="active"></li>
    <li data-target="#sliderFull" data-slide-to="1"></li>
    <li data-target="#sliderFull" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="assets/images/back_1.jpg">
        </div>
        <div class="item">
            <img src="assets/images/back_1.jpg">
        </div>
        <div class="item">
            <img src="assets/images/back_1.jpg">
        </div>
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#sliderFull" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#sliderFull" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php //Slider ?>

            <section id="left-menu">
                <div class="container">
                    <div class="col-xs-12 col-sm-6 col-md-4" id="menu_oculto_right">
                        <a href="#" title="Cerrar Menú" alt="Link to Cerrar Menú" class="close-button" id="close-button-a"><img src="assets/images/general/white-x.png" alt="close icon"></a>
                        <ul>
                            <li class="fuchsia">
                                <a href="#" title="Home" alt="Link to Home" data-position="1" class="active">Home</a>
                            </li>
                            <li class="green">
                                <a href="#" title="Nosotros" alt="Link to Nosotros" data-position="2"><?=$idioma['text_coconut'];?></a>
                            </li>
                            <li class="aquamarine">
                                <a href="#" title="Portafólio" alt="Link to Portafólio" data-position="3"><?=$idioma['text_coconut_1'];?></a>
                            </li>
                            <li class="yellow">
                                <a href="#" title="Contacto" alt="Link to Contacto" data-position="4"><?=$idioma['text_coconut_2'];?></a>
                            </li>
                        </ul>
                        <div class="row bottom-content">
                            <p>@coconutcreativo</p>
                            <p>
                                <a href="https://www.instagram.com/coconutcreativo/" title="Instagram" alt="Link to Instagram" target="_blank">
                                <img src="assets/images/general/white-instagram.png" alt="Instagram Active Icon" class="simple">
                                <img src="assets/images/general/pink-instagram.png" alt="Instagram Active Icon" class="hidden">
                                </a>
                                <a href="https://www.facebook.com/pages/Coconut-Creativo/148057185227739" title="Facebook" alt="Link to Facebook" target="_blank">
                                <img src="assets/images/general/white-facebook.png" alt="Facebook Icon" class="simple">
                                <img src="assets/images/general/green-facebook.png" alt="Facebook Active Icon" class="hidden">
                                </a>
                                <a href="https://es.pinterest.com/coconutcreativo/" title="P" alt="Link to P" target="_blank">
                                <img src="assets/images/general/white-p.png" alt="P Icon" class="simple">
                                <img src="assets/images/general/aquamarine-p.png" alt="P Active Icon" class="hidden">
                                </a>
                                <a href="https://twitter.com/coconutcreativo" title="Twitter" alt="Link to Twitter" target="_blank">
                                <img src="assets/images/general/white-twitter.png" alt="Twitter Icon" class="simple">
                                <img src="assets/images/general/yellow-twitter.png" alt="Twitter Active Icon" class="hidden">
                                </a>
                            </p>
                            <p><img src="assets/images/general/white-phone.png" alt="Phone Icon"> <span>+58(412)226.6985</span></p>
                            <div class="row mail">
                                <a href="#" title="Email Coconut" alt="Link to Coconut Email">info@coconutcreativo.com</a> 
                                <a href="#" title="Email Coconut" alt="Link to Coconut Email">coconut.creativo@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!--END HEADER-->


        <!--NOSOTROS-->
        <section class="dark-brown" id="coconut">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2>Coconut Creativo</h2>
                    <p><?=$idioma['text_coconut_3'];?></p>
                    <a href="#" title="Ver Más" alt="Link to Ver Más" class="light-brown-button" id="coconut-vm">
                    <?=$idioma['ver_mas'];?>
                    </a>
                </div>
            </div>
        </section>
        <section id="coconut-details">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <p><?=$idioma['text_coconut_4'];?></p>
                    <p><span class="slogan">"<?=$idioma['text_coconut_5'];?>"</span></p>
                    <p><span><?=$idioma['text_coconut_6'];?></span></p>
                    <p><?=$idioma['text_coconut_7'];?></p>
                    <p><span><?=$idioma['text_coconut_8'];?></span></p>
                    <p><?=$idioma['text_coconut_9'];?></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <a href="#" title="Cerrar Sección Nosotros" alt="Link to Cerrar Sección Nosotros" class="close-button" id="coconut-close"><img src="assets/images/general/black-x.png" alt="close icon"></a>
                    <div class="row special-list">
                        <ul>
                            <li class="title"><span><?=$idioma['text_coconut_10'];?></span><br><?=$idioma['text_coconut_10_b'];?></li>
                            <li><?=$idioma['text_coconut_10'];?></li>
                            <li><?=$idioma['text_coconut_11'];?></li>
                            <li><?=$idioma['text_coconut_12'];?></li>
                            <li><?=$idioma['text_coconut_13'];?></li>
                            <li><?=$idioma['text_coconut_14'];?></li>
                        </ul>
                        <img src="assets/images/coconut/cinta-tl-br.png" alt="Cinta Icon TOP LEFT">
                        <img src="assets/images/coconut/cinta-tr-bl.png" alt="Cinta Icon TOP RIGHT">
                        <img src="assets/images/coconut/cinta-tr-bl.png" alt="Cinta Icon BOTTOM LEFT">
                        <img src="assets/images/coconut/cinta-tl-br.png" alt="Cinta Icon BOTTOM RIGHT">
                    </div>
                </div>
            </div>
        </section>
        <!--END NOSOTROS-->
        <!--PORTFOLIO GROUP-->
        <section id="group">
            <section id="portafolio">
                <div class="container-fluid">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-6 col-md-6 left transicion trigger_porta" id="diseno-desarrollo" data-id="1" data-color="#FF00E4">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h2 class="titulo_porta" data-title="Diseño <br><span>y Desarrollo</span>">
                                <?=$idioma['disenio_dev'];?> 
                                <span><?=$idioma['disenio_dev_sub'];?></span>
                                </h2>
                                <a class="link-ver button-menu"><?=$idioma['ver_op'];?></a>
                                <ul class="oculto">
                                    <li>Web Site autogestionable.</li>
                                    <li>E-commerce.</li>
                                    <li>Apps móviles.</li>
                                    <li>Banners.</li>
                                </ul>
                                <img src="assets/images/general/principal-1.png" class="responsive-pimg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 right transicion trigger_porta" id="branding-identidad" data-id="3" data-color="#FFA200">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h2 class="titulo_porta" data-title="Branding <br><span>Identidad</span>"> 
                                <?=$idioma['branding'];?> 
                                <span><?=$idioma['branding_sub'];?></span>
                                </h2>
                                <a class="link-ver button-menu"><?=$idioma['ver_op'];?></a>
                                <ul class="oculto">
                                    <li>Creación de logotipo.</li>
                                    <li>Diseño de Papeleria</li>
                                    <li>Diseño de Material P.O.P</li>
                                </ul>
                                <img src="assets/images/general/principal-2.png" class="responsive-pimg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 left transicion trigger_porta" id="diseno-grafico" data-id="2" data-color="#C0FF00">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h2 class="titulo_porta" data-title="Diseño <br><span>Gráfico</span>">
                                    <?=$idioma['disenio'];?> 
                                    <span><?=$idioma['disenio_sub'];?></span>
                                </h2>
                                <a class="link-ver button-menu"><?=$idioma['ver_op'];?></a>
                                <ul class="oculto">
                                    <li>Vallas, cartelería, flyers.</li>
                                    <li>Diseño publicitario (prensa).</li>
                                    <li>Ilustraciones.</li>
                                    <li>Catálogos.</li>
                                    <li>Revistas.</li>
                                    <li>Dípticos y Trípticos.</li>
                                    <li>Brochure.</li>
                                    <li>Packaging.</li>
                                    <li>Etiquetas.</li>
                                    <li>Stickers.</li>
                                </ul>
                                <img src="assets/images/general/principal-3.png" class="responsive-pimg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 right transicion trigger_porta" id="social-media" data-id="7" data-color="#2CFFFB">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h2 class="titulo_porta" data-title="Social Media <br><span>Multimedia</span>"> 
                                    <?=$idioma['social_media'];?> 
                                    <span><?=$idioma['social_media_sub'];?></span>
                                </h2>
                                <a class="link-ver button-menu"><?=$idioma['ver_op'];?></a>
                                <ul class="oculto">
                                    <li>Diseño de Imágenes y Videos.</li>
                                    <li>Community manager.</li>
                                    <li>Modelado 3D.</li>
                                </ul>
                                <img src="assets/images/general/principal-4.png" class="responsive-pimg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END PORTFOLIO GROUP-->

        </section>
 
        <!--WEB GALLERY-->
	    <!--<div id="contenedor_portafolio_detalles_general" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:10;display:none; "> 	</div> -->        
        <section id="portafolio_detalles_general" class="galeria-portafolio fuchsia bg_light_black">
            <div class="container-fluid bg_light_black">
                <div class="row options">
                    <h3 id="titulo_general_portafolio_movil"></h3>
                    <a href="#" title="Cerrar" alt="Link to Cerrar Menú" class="close-button" id="portafolio_general_close_movil"><img src="assets/images/general/white-x.png" alt="close icon"></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8" id="watch_porta">
                </div>
                <!--Menu del portafolio-->
                <div class="col-xs-12 col-sm-6 col-md-4 left-menu-details" id="left-menu-pd-web">
                    <div class="row button-access">
                        <a title="Cerrar Menú" alt="Link to Cerrar Menú" class="close-button" id="portafolio_general_close"><img src="assets/images/general/white-x.png" alt="close icon"></a>
                        <?php /* 
                        <a href="#" title="Menos Opciones" alt="Link to Menos Opciones" class="less-options-button" id=""><img src="assets/images/general/prev-arrow.png" alt="close icon"></a>
                        <a href="#" title="Desplegar Menú" alt="Link to Desplegar Menú" class="button-menu">Menú</a>
                        */ ?>
                    </div>
                    <h1 id="titulo_general_portafolio"></h1>
                    <p id="numero_artes"></p>
                    <?php /* ?>
                    <ul>
                        <li><a href="#" title="Ver Todos" alt="Link to Ver Todos">Ver Todos</a></li>
                        <li><a href="#" title="Web Site Autogestionable" alt="Link to Web Site Autogestionable">Web Site Autogestionable.</a></li>
                        <li><a href="#" title="E-Comerse" alt="Link to E-Comerse">E-Comerse.</a></li>
                        <li><a href="#" title="APPS Móviles" alt="Link to APPS Móviles">APPS Móviles.</a></li>
                        <li><a href="#" title="Banners" alt="Link to Banners">Banners.</a></li>
                    </ul>
                    */?>
                </div>
                <!--END TRANSPARENT MENU-->
            </div>
        </section>

        <!--END WEB GALLERY-->   
        <section id="portafolio_detalle_item" class="portafolio-similitudes active oculto" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.5);z-index:10000;">
           <div class="container-fluid">
              <div class="row options">
                 <a href="#" title="Opciones" alt="Link to Menú de Opciones" class="button-options" data-options="5">Opciones</a>
              </div>
              <div id="imagenes_detalle_porta" class="col-xs-12 col-sm-6 col-md-6 content">
              </div>
              <!--TRANSPARENT MENU-->
              <div class="col-xs-12 col-sm-6 col-md-6 left-menu-details fuchsia" id="left-menu-dw">
                 <div class="row button-access">
                    <a href="#" title="Menos Opciones" alt="Link to Menos Opciones" class="less-options-button" id=""><img src="assets/images/general/prev-arrow.png" alt="close icon"></a>
                    <a href="#" title="Volver a Galería" alt="Link to Volver a Galería" class="close-button" id="volver_galeria_porta"><img src="assets/images/general/galeria.png" alt="Volver a Galería icon"><?=$idioma['volver_galeria'];?></a>
                    <!--<a href="#" title="Desplegar Menú" alt="Link to Desplegar Menú" class="button-menu">Menú</a>-->
                 </div>
                 <h1 id="tipoproyect"></h1>
                 <h2 class="white" id="proyecto_porta"></h2>
                 <p id="pais_year_porta"></p>

                 <a id="link_detalle_porta" href="#" title="Acyclic Group" alt="Link to Acyclic Group" class="special-link">
                 </a>
                
                
                 <ul id="mas_results_porta">
                    <li>
                       <a href="#" title="Más de Acyclic Group" alt="Link to Más de Acyclic Group">Más de Acyclic Group</a>
                    </li>
                    <li>
                       <a href="#" title="Diseño de Logotipo" alt="Link to Diseño de Logotipo">Diseño de Logotipo.</a>
                    </li>
                    <li>
                       <a href="#" title="Modelado y Animación 3D Logo" alt="Link to Modelado y Animación 3D Logo">Modelado y Animación 3D Logo.</a>
                    </li>
                 </ul>

                 <ol id="pagination-dg" class="pagination-style">
                    <li>
                       <a href="#" class="anterior" title="Anterior" alt="Link to Anterior"><?=$idioma['anterior'];?></a>
                    </li>
                    <li>
                       <a href="#" class="siguiente" title="Siguiente" alt="Link to Siguiente"><?=$idioma['siguiente'];?></a>
                    </li>
                 </ol> 
                 <?php /**/ ?>
              </div>
              <!--END TRANSPARENT MENU-->
           </div>
        </section>

        <!--PORTFOLIO GROUP-->

        <!--CONTACTO-->
        <section class="dark-brown" id="contacto">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2><?=$idioma['text_coconut_16'];?></h2>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="row mail">
                            <a href="#" title="Email Coconut" alt="Link to Email Coconut">info@coconutcreativo.com</a> 
                            <a href="#" title="Email Coconut" alt="Link to Email Coconut">coconut.creativo@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 phone">
                        <p><img src="assets/images/general/white-phone.png" alt="Phone Icon"> <span>+58(412)226.6985</span></p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a href="#" title="Formulário de Contacto" alt="Link to Formulário de Contacto" class="light-brown-button" id="contacto-vm"><?=$idioma['text_coconut_17'];?></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="button-contacto-desplegado">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="#" title="Formulário de Contacto" alt="Link to Formulário de Contacto" class="light-brown-button" id="contacto-close"><?=$idioma['text_coconut_17'];?></a>
                </div>
            </div>
        </section>
        
        <section id="contacto-desplegado">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <form name="contact" id="form_contact" action="contacto.php" method="post">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                            <div id="mensajes_form_contacto" class="col-md-12 alert alert-danger oculto"></div>
                        </div>

                        <div class="col-xs-11 col-xs-offset-1" id="campos_requeridos_info">(*) <?=$idioma['text_coconut_18'];?></div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1">
                            <p><span class="color_requerido">*</span><span class="little"><?=$idioma['text_coconut_19'];?>:</span></p>
                            <select id="tipo_solicitud" class="form-control foco_contacto" name="tipo_solicitud">
                                <option value="Diseño web y app">Diseño web y app</option>
                                <option value="Diseño Gráfico">Diseño Gráfico</option>
                                <option value="Logotipos">Logotipos</option>
                                <option value="Editorial (Maquetación)">Editorial (Maquetación)</option>
                                <option value="Empaques (Packaging)">Empaques (Packaging)</option>
                                <option value="Video y 3D">Video y 3D</option>
                                <option value="Redes Sociales">Redes Sociales</option>
                            </select>
                            <p><span class="color_requerido">*</span><span class="little"><?=$idioma['text_coconut_21'];?>:</span></p>
                            <input id="nombre_contacto" type="text" name="nombre_contacto" placeholder="<?=$idioma['text_coconut_21'];?>" class="form-control foco_contacto" required="true">
                            <p><span class="color_requerido">*</span><span class="little"><?=$idioma['text_coconut_23'];?>:</span></p>
                            <input id="email_contacto" type="email" name="email_contacto" placeholder="EMAIL" class="form-control foco_contacto" required="true">
                            <p><span class="color_requerido">*</span><span class="little"><?=$idioma['text_coconut_25'];?>:</span></p>
                            <textarea id="mensaje_contacto" name="mensaje_contacto" class="form-control foco_contacto" placeholder="<?=$idioma['text_coconut_25'];?>" required="true"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <p><span class="color_requerido">*</span><span class="little"><?=$idioma['text_coconut_20'];?>:</span></p>
                            <select id="pais" name="pais" class="form-control little">
                            </select>
                            <p><span class="big"><?=$idioma['text_coconut_26'];?></span></p>
                            <input type="text" id="referencia_web_contact" name="referencia_web_contact" placeholder="ej: example.com" class="form-control foco_contacto">
                             <p><span class="little"><?=$idioma['text_coconut_28']?>:</span></p>
                            <input type="text" id="secciones_web_contact" name="secciones_web_contact" placeholder="<?=$idioma['text_coconut_22']?>" class="form-control foco_contacto">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p><span class="color_requerido">*</span><span class="little"><?=$idioma['text_coconut_29'];?>:</span></p>
                                <p><span class="light-brown">¿<?=$idioma['text_coconut_30'];?>?</span> <input type="checkbox" name="opcionesweb_contact[]" value="carrito"></p>
                                <p><span class="light-brown">¿<?=$idioma['text_coconut_31'];?>?</span> <input type="checkbox" name="opcionesweb_contact[]" value="multi-idioma"></p>
                                <p><span class="light-brown">¿<?=$idioma['text_coconut_32'];?>?</span> <input type="checkbox" name="opcionesweb_contact[]" value="hosting"></p>
                            </div>
                        </div>

                        <div id="div-btn-contacto" class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 div-btn-contacto">

                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <p><span class="light-brown captcha">* (8 + 8) =</span> <input type="text" id="captcha" name="captcha" class="form-control captcha foco_contacto" required="true"></p>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <button id="boton_contacto" class="light-brown-button" title="Enviar Solicitud"><?=$idioma['text_coconut_33'];?></button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </section>
        <!--END CONTACTO-->

        <!--FOOTER-->
        <footer>
            <section>
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p>&copy; <?=$idioma['text_coconut_34'];?></p>
                    </div>
                </div>
            </section>
        </footer>        
        <div id="pie"></div>
        <!--END FOOTER-->
        
        <div id="loader_form_contact" class="ventana"></div>        
        <div id="success_form_contact" class="ventana"><p id="p_success_form_contact"></p></div>

        <!--NECESARY SCRIPTS-->
        <script src="assets/js/jquery2.1.4.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/paises.js"></script>
        <script src="assets/js/function.js"></script>
    </body>
</html>