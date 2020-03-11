<?php
     include('includes/db.php');
   
     $sql="SELECT * FROM mascotas";
     $result= DB::query($sql);
  //  $result= mysqli_query($con,$sql);
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/styles_index.css">  
    <link rel="icon"href="ico/Favicon.ico">
</head>
<body>
    <div class="Tabls">

            <h1> Datos de la Base de datos </h1>

      <table >
         <tr>
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <th>Raza</th>
              <th>Edad</th>
              <th>Modificar</th>
              <th>Eliminar</th>


           </thead>      
        </tr>

    <?php


        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
         <td><?php echo $mostrar['nombre'] ?></td>
         <td><?php echo $mostrar['raza'] ?></td>
         <td><?php echo $mostrar['edad'] ?></td>
         <td><a href="modificar.php?id=<?php echo $mostrar['id'] ?> "class="mod">Modificar</a >
         <td><a href="eliminar.php?id=<?php echo $mostrar['id'] ?>">Eliminar</a>
       
         
        </tr>

            <?php
        }



     ?>
  
      </table>

      <a href="guardar_mascota.php" ><img src="img/bt3.png"   alt="logo"></a>
      
  


</div>
  
</body>
</html>