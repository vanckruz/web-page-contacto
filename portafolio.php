<?php

/**
*
* Copyright (C) 2016 
* Jhonny Vasquez
*
**/

/*error_reporting(E_ALL); 
ini_set("display_errors", 1); */

class Portafolio{ 

    public $seccion_portafolio;
    
    public function __construct(){
    	//header('Content-type: application/json;charset=utf-8');
        $this->get_portafolio();

    }

    public function get_portafolio(){

		/*$items_por_pagina = 9; 
		$pagina           = $_GET["pagina"]; 
		if (!$pagina) { 
		   	$inicio = 0; 
		   	$pagina=1; 
		} 
		else { 
		   	$inicio = ($pagina - 1) * $items_por_pagina; 
		}*/    	
		$id_servicio      = $_GET["id_serv"]; 

        $query_porta = "SELECT * FROM portafolios 
        WHERE portafolios.port_publicar='S'
        AND portafolios.serv_id = ".$id_servicio." ORDER BY portafolios.port_orden ASC";
        // limit ".$inicio.",".$items_por_pagina
		//$conexion = mysql_pconnect("localhost","root", "");
		$conexion = mysql_pconnect("localhost","coco8387_nuevo13", "Nu2013Vo");
		mysql_select_db("coco8387_website", $conexion);
		
		$all_porta = mysql_query($query_porta, $conexion);
		//$results_porta   = mysql_fetch_assoc($all_porta);
		$total_registros = mysql_num_rows($all_porta);

        $this->seccion_portafolio = '<div class="row">';

			$count = 1;

			while ($fila = mysql_fetch_assoc($all_porta)) {

				$servicios = mysql_query("select * from servicios where serv_id =".$fila['serv_id'], $conexion);

				while ($fila2 = mysql_fetch_assoc($servicios)) {		
	        	//echo $fila2['serv_nombre'];

	        		$count++;	

		            $this->seccion_portafolio .= '<div id="item-portafolio-'.$count.'" class="col-xs-12 col-sm-4 col-md-4 item" data-num="'.$count.'" data-pais="'.$fila['port_pais'].'" data-year="'.$fila['port_ano'].'" data-proyect="'.$fila['port_proyecto'].'" data-imgzoom="'.$fila['port_imagenzoom'].'" data-imagenporta2="'.$fila['port_imagen2'].'" data-imagenporta3="'.$fila['port_imagen3'].'"  data-url="'.$fila['port_url'].'" data-serv_nombre="'.$fila2['serv_nombre'].'" data-total_items="'.$total_registros.'" >';
					$this->seccion_portafolio .= '<img src="/art/portafolio/'.$fila['port_imagen'].'" title="'.$fila['port_proyecto'].'">';
					$this->seccion_portafolio .= '<div class="row details">';
					$this->seccion_portafolio .= '<p>'.$fila['port_url'].'</p>';
					$this->seccion_portafolio .= '<p><span>'.$fila['port_proyecto'].'</span></p>';
					$this->seccion_portafolio .= '</div>';
					$this->seccion_portafolio .= '</div>';
				}
        	
			}
        
        $this->seccion_portafolio .='</div>';

         print_r( 
         	json_encode( 
	         	array(
	         	"html" => utf8_encode($this->seccion_portafolio) ,
	         	"num_rows" => $total_registros
	         	 )
         	  )
         	);
       // echo utf8_decode($this->seccion_portafolio);
    }

}

$portafolio_coco = new Portafolio();

?>

 
