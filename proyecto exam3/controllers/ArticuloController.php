<?php
	class ArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		
		public function insertaArticulo($datos){
			
			echo "<pre>datos:";
			print_r($datos);
			echo "</pre>";
			$articulo=new Articulo();//se prueba conexion
			$articulo->set_nombre($datos['nombre']);
			$articulo->set_resumen($datos['resumen']);
			$articulo->set_abstract($datos['abstract']);
			$articulo->set_introduccion($datos['introduccion']);
			$articulo->set_metodologia($datos['metodologia']);
			$articulo->set_contenido($datos['contenido']);
			$articulo->set_fecha_creacion($datos['fecha_creacion']);
			$articulo->set_archivo_pdf($datos['archivo_pdf']);
			$articulo->set_id_status($datos['id_status']);
			$articulo->set_conclusiones($datos['conclusiones']);
			$articulo->set_agradecimientos($datos['agradecimientos']);
			$articulo->set_referencias($datos['referencias']);

			if(count($articulo->errores)>0){
				print_r($articulo->errores);
			}
			//die();//detieene o mata todo el script.
			$articulo->inserta($articulo->get_atributos());//metodo insertta y ereda de modelo 

		}

		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>