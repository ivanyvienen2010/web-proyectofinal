<?php
   include('conexion.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<title>Proyecto final de desarrollo web</title>
  <style>
    h1{
      color: black;
      text-align: left;
    }
  </style>
</head>
<body style= " background-color: white;   max-width: 80%; margin :auto; border:2px solid black; padding: 40px;">

<div class="row">
    <div class="col-8">
    </div>
    <div class="col-4">
      <button type="button" class="btn-primary" onclick="agregar()">Agregar Usuarios</button>
    </div>
   </div>
<table class="table table-striped table-dark">
     <thead>
       <tr class="table-blue">
         <th scope="col">id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Apellido Materno</th>
         <th scope="col">Apellido Paterno</th>
         <th scope="col">Edad</th>
         <th scope="col">Fecha de Nacimiento</th>
         <th scope="col">Redes</th>
         <th scope="col">Telefono</th>
         <th scope="col">Email</th>
         <th scope="col">Opciones</th>
       </tr>
     </thead>
     <tbody>
      <?php
      $counter = 0;
           foreach ($resultado as $r) { ?>
            <tr>
              <?php $counter = $counter + 1; ?>
               <td><?php echo $r['id']; ?></td>
               <td><?php echo $r['nombre']; ?></td>
               <td><?php echo $r['ap1']; ?></td>
               <td><?php echo $r['ap2']; ?></td>
               <td><?php echo $r['edad']; ?></td>
               <td><?php echo $r['fechaNacimiento']; ?></td>
               <td><?php echo $r['linkRedes']; ?></td>
               <td><?php echo $r['telefono']; ?></td>
               <td><?php echo $r['email']; ?></td>
               <td>
               	<a href="<?php echo 'editUser.php?id='.$r['id'];?>" type="button" class="btn btn-outline-secondary">Editar</a>
               	<a href="<?php echo 'deleteUser.php?id='.$r['id'];?>" type="button" class="btn btn-outline-secondary">Eliminar</a>
               </td> 
            </tr>  
            <?php }?>
   </table>
   <?php 
  if ($counter == 0) {
  ?>  


  <?php
  }
   ?>

<script type="text/javascript">
	function agregar(){
		window.location.replace("addUser.php");

	}


</script>
</body>
</html>