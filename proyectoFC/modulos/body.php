		
<?php 

  //panelPrincipal(); 
  formularioComprobarTarjeta();
// menuProfesor();
	if (!isset($_POST['acceder']) ||!isset($_POST['idTarjeta'])) {
		
		echo "la tarjeta no es esta registrada o el campo esta vacio";
		
	}else {
		//show_tarjeta();
		//echo "!";
		$idTarjeta = $_POST['idTarjeta'];
		//$_SESSION['ìdTarjeta']=$idTarjeta;
			
			//aqui se llama a comprobar tarjeta en FUNCIONES.PHP
			comprobarTarjeta($idTarjeta);
			//echo "!!!";
			//show_tarjeta();
			
       // echo $idTarjeta;
	}

?>
 
                <!--<div id="divcentral" class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div id="divcentral2" class="text-center">
                            <h1 id="letra" class="mx-auto my-0 text-uppercase">Portal</h1>
                            </br></br></br></br></br></br></br></br></br>
                            <?= "<a class='btn btn-primary' href='index.php?page=login'>Administración</a>"?>
                            <?= "<a class='btn btn-primary' href='index.php?page=pagConsulta'>Acceso Aseo</a>"?>
                            <?= "<a class='btn btn-primary' href='index.php?page=convivencia'>Convivencia</a>"?>
                            <?= "<a class='btn btn-primary' href='index.php?page=informacion'>Información</a>"?>
                        </div>
                    </div>
                </div>-->
               

           
 
