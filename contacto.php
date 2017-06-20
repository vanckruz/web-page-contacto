<?php class Mailer{

	public function __construct(){
	  $this->mailer1();
	}

    public function sendmail($para,$asunto,$mensaje){

        $mensaje_html = '
            <html>
            <head>
              <title>'.$asunto.'</title>
              <meta charset="UTF-8">
            </head>
            <body>
              <h1>¡Tienes un nuevo mensaje en tu página web!</h1>
              <hr>'.$mensaje.'<hr>
              <p style="white-spaces:pre-line;text-align:justify;padding:12px;font-size:1em;">Este a sido un mensaje de notificación de la página web <a href="http://www.coconutcreativo.com/">www.coconutcreativo.com</a></p>
            </body>
            </html>
            ';

	    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	    $cabeceras .= 'From:coconut.creativo@gmail.com \r\n' . 
	    $cabeceras .= 'Reply-To:coconut.creativo@gmail.com \r\n';
	    $cabeceras .= 'X-Mailer: PHP/' . phpversion(); 
	 
	    mail($para, $asunto, $mensaje_html, $cabeceras);
    }

    public function guarda_contacto($tipo_solicitud = "",$nombres = "",$email = "",$mensaje = "",$pais = "",$web_refencia = "",$secciones_web = "",$opciones_web = ""){

    	$conexion = mysql_pconnect("localhost","coco8387_nuevo13", "Nu2013Vo");
		mysql_select_db("coco8387_website", $conexion);
		
		$query_contact  = "insert into contacto (tipo_solicitud,nombres,email,mensaje,pais,web_referencia,web_secciones,web_opciones)";
		$query_contact .= " values('$tipo_solicitud','$nombres','$email','$mensaje','$pais','$web_refencia','$secciones_web','$opciones_web')";

		mysql_query($query_contact, $conexion);
    }

    public function mailer1(){

        if (isset($_REQUEST["tipo_solicitud"]) && !empty($_REQUEST["tipo_solicitud"]) &&
            isset($_REQUEST["nombre_contacto"]) && !empty($_REQUEST["nombre_contacto"]) &&
            isset($_REQUEST["email_contacto"]) && !empty($_REQUEST["email_contacto"]) &&
            isset($_REQUEST["mensaje_contacto"]) && !empty($_REQUEST["mensaje_contacto"]) &&
            isset($_REQUEST["pais"]) && !empty($_REQUEST["pais"])
            ){

            $para    = "coconut.creativo@gmail.com";
            $asunto  = "Tienes un nuevo mensaje en tu página web";

           	$opciones_web_contacto = "";
           	$cont= 0;
            if(isset($_REQUEST["opcionesweb_contact"])  || $_REQUEST["opcionesweb_contact"]  != ""){
				foreach ($_REQUEST["opcionesweb_contact"] as $opcion) {
					$cont++;
					$opciones_web_contacto .= $cont.".-".$opcion."\n";
				}
            }

            $htmlcontacto = "<p><b>Tipo Solicitud: </b>".$_REQUEST["tipo_solicitud"]."</p>";
            $htmlcontacto .= "<p><b>Nombres del contacto: </b>".$_REQUEST["nombre_contacto"]."</p>";
            $htmlcontacto .= "<p><b>Email Contacto: </b>".$_REQUEST["email_contacto"]."</p>";
            $htmlcontacto .= "<p><b>Pais: </b>".$_REQUEST["pais"]."</p>";
            $htmlcontacto .= "<p><b>Opcicones adicionales: </b><hr>";
            $htmlcontacto .= ( isset($_REQUEST["referencia_web_contact"]) || $_REQUEST["referencia_web_contact"] == "" ? "<b>Web de referencia:</b> ".$_REQUEST["referencia_web_contact"]."<br>" : "" );
            $htmlcontacto .= "<b>Opciones en una supuesta página:</b>".$opciones_web_contacto;
            $htmlcontacto .= "</p>";
            

            $mensaje = $htmlcontacto."<p><b>Mensaje Contacto: </b>".$_REQUEST["mensaje_contacto"]."</p>";

            $this->guarda_contacto(
            	$_REQUEST["tipo_solicitud"],
            	$_REQUEST["nombre_contacto"],
            	$_REQUEST["email_contacto"],
            	$_REQUEST["mensaje_contacto"],
            	$_REQUEST["pais"],
            	( isset($_REQUEST["referencia_web_contact"]) || $_REQUEST["referencia_web_contact"] == "" ? $_REQUEST["referencia_web_contact"] : "" ),
            	( isset($_REQUEST["secciones_web_contact"])  || $_REQUEST["secciones_web_contact"]  == "" ? $_REQUEST["secciones_web_contact"]  : "" ),
            	$opciones_web_contacto
            );

            $this->sendmail($para,$asunto,$mensaje);

            echo 1;

        }else{

            echo "Error to send mail";
        }
    }
}

$enviarmail = new Mailer(); ?>