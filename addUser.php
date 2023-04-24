<?php 
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<title>Formiulario de registro</title>
    <style>
    h1{
      color: black;
      text-align: left;
    }
  </style>
</head>
<body style= " background-color: white;   max-width: 80%; margin :auto; border:2px solid black; padding: 15px;">

	<form  id="form1" name="form1" method="POST" action="addUser1.php">
		<div class="row" >
			<div class="col-2">	</div>
			<div class="col-8">
				<h1>Formulario de registro</h1>
				<br>
        		<label for="">Nombre:</label>
        		<input  type="text"  class="form-control" id="nombre" name="nombre" required value="">
        	
        	
        	    <label for="">Apellido Paterno:</label>
        		<input  type="text"  class="form-control" id="ap1" name="ap1" required value="">
        		<label for="">Apellido Materno:</label>
        		<input  type="text"  class="form-control" id="ap2" name="ap2" required value="">
        	</div>
        
      <br>
        		<label for="">Edad:</label>
        		<input  type="text"  class="form-control" id="edad" name="edad" required value="">
        		<label for="">Fecha de Nacimiento:</label>
        		<input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="2018-07-22" >
        
      <br>
        <div class="row">
        	<div class="col-4">
        		<label for="">Sociales:</label>
        		<input  type="text"  class="form-control" id="linkRedes1" name="linkRedes1" required value="">
        	</div>
        	<div class="col-4">
        		<label for="">Email:</label>
        		<input  type="text"  class="form-control" id="email" name="email" required value="">
        	</div>
        	<div class="col-4">
        		<label for="">Telefono:</label>
        		<input  type="text"  class="form-control" id="telefono" name="telefono" required value="">
        	</div>
        </div>
	  <br>
		<div class="row">
	 	<div class="col-5"></div>
	 	<div class="col-7">
	 		<button type="submit" class="btn">Agregar</button>
	 	</div>
	 </div>
			</div>
		</div>	
	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>