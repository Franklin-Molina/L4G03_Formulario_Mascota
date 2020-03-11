<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/Favicon.ico">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styles.css"> 
    <title>login</title>
</head>
<body>
 
 <div class="login-box" >

     
      <img src="img/pika.png" class="avatar" alt="Avatar Image"> 
     <h1>MASCOTAS</h1>
     
     <form action="guardar_mascota.php" method="post">
         
            <label for="nombre" >Nombre</label> 
            <input type="text" name="nombre" required placeholder="nombre">
            
            <label for="raza">Raza</label> 
            <input type="text" name="raza" required placeholder="raza">

            <label for="edad">Edad</label> 
            <input type="text" name="edad" required placeholder="edad">
            
            <input type="submit" value="Guardar">
            
          
          
            <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>
           
          
           
            

          
         
    </form>
     
 </div>
 

    
</body>
</html>