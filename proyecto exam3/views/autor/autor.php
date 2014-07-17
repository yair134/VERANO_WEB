<?php 
  session_start();
  include ('../layouts/header.php');
?>

<?php
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	include('../../models/Autor.php');
	include('../../controllers/AutorController.php');
	include('../../libs/Er.php');	
	
	if(isset($_POST['nombre'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo

  $autorC = new AutorController();
  $autorC->insertaAutor($_POST);//manda llamar la accion
 }
	
?>

	<div class="container">
		<div class="row">
			<div class="col-md-4">					 
				<form id="id_autor" method="post" action=""  role="form">
					<div class="form-group">						
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del autor" required>
					</div>
					<div class="form-group">
						<label for="apellidos">Apellidos:</label>
						<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos del autor"required>
					</div>	
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="introduzca su email" required>
					</div>	
					<div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div><br><br>	
				</form>	
			</div>
		</div>
		<div>
			<ul class="pager">
				<li><a href="#">Anterior</a></li>
				<li><a href="../revista/revista.php">Siguiente</a></li>
			</ul>
		</div>		
	</div>


      
<?php include ('../layouts/footer.php'); ?>