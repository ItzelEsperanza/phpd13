<!DOCTYPE html>

	<?php
	include('conexion.php');
	?>

<html lang= "es">

<head>
	<meta charset= "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> PHP Intro </title>
</head>

<body>

<h1>Into php</h1>
<p>hola mundo listo php</p>
	

	<form action="store.php" method="POST">

	<label for="tarea"> Nombre de Tarea </label> <br>
	<input type="text" name="tarea">
	<br>

	<label for="descipcion"> Descripcion </label> <br>
	<textarea name="descripcion" cols="30" rows="3"> </textarea>
	<br>

	<label for="prioridad"> Prioridad </label> <br>
	<select name="prioridad">
		<option value= "Alta"> Alta </option>
		<option value= "Media"> Media </option>
		<option value= "Baja"> Baja </option>
	</select>

	<input type="checkbox" name="urgente" value="1"> 
	<label for="urgente"> Urgente </label>

	<br>
	<input type="radio" name="tipo" value="escuela">
	<label for="escuela"> Escuela </label> 
	

	<input type="radio" name="tipo" value="trabajo">
	<label for="trabajo"> Trabajo </label>
	
	<br>

	<input type="submit" value="Enviar">

	</form>

	<?php
	//Mostrar datos ingresados 
	$sql = "SELECT * FROM tareas";
	$result = $conn->query($sql);
	//$row = $result -> fetch_array(MYSQLI_ASSOC);

	echo "<table border='1'>";
	echo "<tr> <th> ID </th>  <th> Tarea </th> <th> Descripcion </th> </tr>";

	while($row = $result->fetch_assoc()) {
	echo "<tr>
		<td>" . $row['id'] . "</td>
		<td>" . $row['tarea'] . "</td>
		<td>" . $row['descripcion'] . "</td>
	
	</tr>";
	}
	echo "</table>";
	?>

</body>


</html>
