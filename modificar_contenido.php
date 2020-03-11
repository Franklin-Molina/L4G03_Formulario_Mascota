<?php
include('includes/db.php');

$id=$_REQUEST['id'];
$nombre= $_POST["nombre"];
$raza= $_POST["raza"];
$edad= $_POST["edad"];


 $sql="update mascotas set nombre='$nombre',raza='$raza',edad='$edad' where id='$id' ";

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

