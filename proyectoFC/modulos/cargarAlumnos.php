<?php

	menuImportarAlumnos();
	//echo "<script>window.alert('la BBDD se ha borrado')</script>";
	//header("Location:index.php?page=comienzoDeCurso");

if (isset($_POST['enviar'])){
	 echo "holap";
	 insertarAlumnos($_FILES['file']);
	 print_r($_FILES['file']);
	
}
  
        
?>