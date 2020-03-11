<?php
include('includes/db.php');

$nombre= $_POST["nombre"];
$raza= $_POST["raza"];
$edad= $_POST["edad"];

$sql="insert into mascotas(nombre,raza,edad)
values('$nombre', '$raza', '$edad')";

if($nombre=="" || $raza=="" || $edad==""){

}else{


  

   
  if(DB::query($sql))  {//$con->query($query)==true es lo mismo o se puede omitir
      echo "Mascota guardada correctamente";
  }else{
      echo"No se logro guardar la mascota".$conexion->error;
  }

}
    header('Location: crear.php');

?>