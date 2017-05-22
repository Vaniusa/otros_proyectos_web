<?php
class Conexion {
          protected $conexion_db;
          public function Conexion(){
              try{
                  $this->conexion_db=new PDO('mysql:host=db_host.com; dbname=db_name' , 'dbo_usuario', 'contraseña');
                  $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $this->conexion_db->exec("SET CHARACTER SET utf8");
                  return $this->conexion_db;
              }catch(Exception $e){
                  echo "La linea del error es: " . $e->getLine();
              }
          }
      }
