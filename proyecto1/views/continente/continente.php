<?php
session_start();
include ('../layouts/header.php');
?>

<?php
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	//include('../../models/continente.php');
	//include('../../controllers/siteController/LoginController.php');
	include('../../libs/Er.php');		
?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<div><img src="../img/continente.png" class="img-responsive" alt="Imagen responsive" ></div> 
						<form id="form1" method="post" action=""  class="form-inline" role="form">

							<div class="form-group" >
								<label for="nombre">Nombre del Continente </label>
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca el  Continente" required>
								<br>	  
								
							</div><br><br>												
							
							<div>
								<button type="submit" class="btn btn-primary">Enviar</button>		
								<br><br>
								<ul class="pager">
									<li><a href="#">Anterior</a></li>
									<li><a href="../pais/pais.php">Siguiente</a></li>
								</ul>
							</div>	
							
						</form>
				</div>
			</div>
		</div>


<?php include ('../layouts/footer.php'); ?>