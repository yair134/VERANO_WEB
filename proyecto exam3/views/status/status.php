<?php 
  session_start();
  include ('../layouts/header.php');
?>

<?php
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	include('../../models/status.php');
	include('../../controllers/StatusController.php');
	include('../../libs/Er.php');
	
	if(isset($_POST['status'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo

  $articuloC = new StatusController();
  $articuloC->insertaStatus($_POST);//manda llamar la accion
 }

	
?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<form id="id_status" method="post" action=""  class="form-inline" role="form">

							<div class="form-group" >
								<label for="status">Status: </label>
								<input type="text" class="form-control" id="status" name="status" placeholder="Introdusca el status" required>
								<br>	  
								
							</div><br><br>												
							
							<div>
								<button type="submit" class="btn btn-primary">Enviar</button>		
								<br><br>
								<ul class="pager">
									<li><a href="../articulo/articulo.php">Anterior</a></li>
									<li><a href="#">Siguiente</a></li>
								</ul>
							</div>	
							
						</form>
				</div>
			</div>
		</div>
      
<?php include ('../layouts/footer.php'); ?>