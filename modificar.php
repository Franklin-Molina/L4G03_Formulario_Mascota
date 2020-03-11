<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/Favicon.ico">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styles.css"> 
    <title>login</title>
</head>
<body>
<?php
          include('includes/db.php');

        if(isset($_REQUEST['id'])== false){
                echo "Es necesario un id";
                  die;
        }

         // $id=$_GET['id'];
         $id=$_REQUEST['id'];

        
            $sql="SELECT * FROM mascotas WHERE id='$id'";
            $mascota= DB::query($sql);
            $mostrar= mysqli_fetch_array($mascota);
          // $mascota=mysqli_fetch_object($mascota);//Un solo objeto
          if(!$mascota){
               echo  "Mascota no existe";
          }
        
    ?>

 <div class="login-box" >

      <img src="img/pika.png" class="avatar" alt="Avatar Image"> 
     <h1>Editar</h1>
   
     <form action="modificar_contenido.php?id=<?php echo $mostrar['id']; ?>" method="post">
 
            <label for="" >Nombre</label> 
            <input type="text" name="nombre" required placeholder="nombre" value="<?php echo $mostrar['nombre'];?>">
            
            <label for="">Raza</label> 
            <input type="text" name="raza" required placeholder="raza"value="<?php echo $mostrar['raza'];?>">

            <label for="">Edad</label> 
            <input type="text" name="edad" required placeholder="edad"value="<?php echo $mostrar['edad'];?>">
            
            <input type="submit" value="Guardar">
            
            <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>
         
    </form>
     
 </div>
 
</body>
</html>