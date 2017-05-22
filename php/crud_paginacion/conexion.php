<?php


   try{
    $base=new PDO('mysql:host=db_host.com; dbname=name' , 'dbo_usuario', 'contraseña');    //conectar con la base de datos "pruebas"
       $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);           //gestiona las exceptiones
       $base->exec("SET CHARACTER SET UTF8");                                    //juego de caracteres
   }catch (Exception $e){
       die('Error' . $e->getMessage());                                          //acaba con la conexion y nos dice el mensaje
       echo "Linea del error" . $e->getLine();                                   //linea del error
   }
