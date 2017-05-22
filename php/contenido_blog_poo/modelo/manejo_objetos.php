<?php
    include_once("objeto_blog.php");
	class manejo_objetos{
		
		private $conexion;
		
		public function __construct($conexion){
		   $this->setConexion($conexion);
		   	}
			
		public function setConexion(PDO $conexion){
			
			$this->conexion=$conexion;
			}
			
		public function getContenidoPorFecha(){
		  $matriz=array();
		  $contador=0;
		  $resultado=$this->conexion->query("SELECT * FROM contenido_blog ORDER BY Fecha DESC");
		  
		  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			$blog=new objeto_blog();
			$blog->setId($registro["Id"]);
			$blog->setTitulo($registro["Titulo"]);
			$blog->setFecha($registro["Fecha"]);
			$blog->setComentario($registro["Comentario"]);
			$blog->setImagen($registro["Imagen"]);
			$matriz[$contador]=$blog;
			$contador++;
		  }
		    return $matriz;
		}
			
			public function insertaContenido(objeto_blog $blog){
			  $sql="insert into contenido_blog (Titulo,Fecha, Comentario, Imagen) values ('" . $blog->getTitulo() . "', '" . $blog->getFecha() . "', '" . $blog->getComentario() . "', '" . $blog->getImagen() . "')";
			  $this->conexion->exec($sql);
			}
	}

?>
