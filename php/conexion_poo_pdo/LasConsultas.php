<?php


   require ("conexion_bbdd.php");

    class LasConsultas extends Conexion{
        public function LasConsultas(){
            parent::__construct();
        }
		
		
       
		    public function get_buscar($dato){				
            $sql="SELECT * FROM productos WHERE Nombre_articulo LIKE '%$dato%'";			
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->conexion_db=null;
	
        }
		
		public function actualizar($cod,$sec,$nom,$pre, $por){
          $sql="UPDATE productos SET Codigo='$cod', Seccion='$sec', Nombre_articulo='$nom', Precio='$pre', Pais_de_Origen='$por' WHERE Codigo='$cod'";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute();
            $sentencia->closeCursor();   
            $this->conexion_db=null;
        }
		
		
		public function insertar($cod,$sec,$nom,$pre, $por){
          $sql="INSERT INTO productos (Codigo, Seccion, Nombre_articulo, Precio, Pais_de_Origen) VALUES ('$cod', '$sec', '$nom', '$pre','$por')";
            $sentencia=$this->conexion_db->prepare($sql);			
            $sentencia->execute();
            $sentencia->closeCursor();
            $this->conexion_db=null;			   
}        
		
		public function eliminar($dato){
          $sql = "DELETE FROM productos WHERE Codigo='$dato'";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute();
            $sentencia->closeCursor();			
            $this->conexion_db=null;
        }
		
		public function todos(){
          $sql="SELECT * FROM productos";
            $sentencia=$this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->conexion_db=null;
        }
		
    }