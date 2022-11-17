<?php
$usuario='';
$tarjeta='';
//echo "hola";
seleccioTarejeta();

if (isset($_POST['guardar'])){
	// echo "holap";
	//echo $_REQUEST['usuario'];
	//echo $_REQUEST['tarjeta'];
	$usuario =  $_REQUEST['usuario'];
	$tarjeta =  $_REQUEST['tarjeta'];
	$tarjetas = Tarjetas::instance();
	


	//$insertarUserTarje= $tarjetas->insertareUserTarje($usuario,$tarjeta);
	 
	
}


?>