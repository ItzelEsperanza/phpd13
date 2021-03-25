	<?php
	
	include('conexion.php');

	 if(!empty($_POST['tarea'])){
	 //echo $_POST['tarea']; este ya no se usa

	  //recibir datos

	 $tarea = $_POST['tarea'];
	 $descripcion = $_POST['descripcion'];
	 $prioridad = $_POST['prioridad'];
	 $urgente = $_POST['urgente'];
	 $tipo = $_POST['tipo'];
	

	 //validar datos confome a tabla bd, que correspondan
	 //Validar==sanitizar se la brinco el profe

	  //guardar datos

	  $sql = "INSERT INTO tareas (tarea, descripcion, prioridad,urgente,tipo) 
	  VALUES ('$tarea', '$descripcion', '$prioridad', '$urgente', '$tipo ')";
	 

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 header('Location: index.php');
		$conn->close();

	 }//llave del if

	 else{
	 echo "No hay datos";
	 }
	?>
