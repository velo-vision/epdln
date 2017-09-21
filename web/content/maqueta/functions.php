<?php
ini_set('display_errors', '1');

switch($_SERVER['SERVER_NAME']){
    case "epdln.dev.gamol.net": //Cambiar path (URL DEV).
        $rutaProyecto = "/maqueta/";
        //echo "string 1";
        break;
	case "localhost"://Cambiar path (URL localhost).
        $rutaProyecto = "/proyectos/epdln/web/content/maqueta/";
         // echo "string 2";
        break;
    default:
        $rutaProyecto = "/web/content/maqueta/";
         // echo "string 3";
}

$srvr = "http://".$_SERVER['HTTP_HOST'].$rutaProyecto;
$url = $srvr;
define("CARPETA", $url);

//Títulos Secciones
 function TituloSecciones() {
	$srvrPath = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$archivo = basename($srvrPath).'.php';
	$urlTitle = $archivo;
	$arrayUrls = array(
	    //Páginas Títulos
	    'maqueta.php'=>'Inicio',
		'inicio.php'=>'Inicio',
	    'nosotros.php'=>'Nosotros',
	    //Internas Títulos
	    //'titulo-interna.php'=>'tiutlo de la Interna'
	);

	return $arrayUrls[$urlTitle];
}

?>
