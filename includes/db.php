<?php

//Datos conexion




class DB{
   static $host = "localhost";
   static $user ="root";
   static $password= "";
   static $db="datos_php";
    
    public static function init(){
    echo "Iniciando base de datos";
    }
    public static function query($sql){

        //Crear la conexion
        $con =new mysqli(self::$host,self::$user,self::$password,self::$db);

        $result =$con->query($sql);

        $con->close();
        return$result;


        
    }

}




?>