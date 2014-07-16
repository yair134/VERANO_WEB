<?php
session_start();
include ('../layouts/header.php');
?>

<?php
	//include('../../libs/adodb5/adodb.pager.inc.php');
	//include('../../libs/adodb5/adodb.inc.php');
	//include('../../models/Conexion.php');
	//include('../../models/Modelo.php');
	//include('../../models/equipo.php');
	//include('../../controllers/siteController/equipoController.php');
	//include('../../libs/Er.php');
	//include('../../layouts/header.php');
	
	//if (isset($_POST['nombre'])){
	//echo '<pre>';
	//print_r ($_POST);
	//echo '<pre>';
	//
	
?>
			<div class="row">
				<div class="col-md-12">		
					<div><img src="../img/equipo.png" class="img-responsive" alt="Imagen responsive" ></div> 
						<form id="form6" method="post" action="" class="form-inline" role="form">

							<div class="form-group">
								<label for="nombre">Nombre del Equipo </label>
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca el Nombre de Su Equipo" required>
							</div><br>	
							
							<div class="form-group">	
								<label for="id_pais" >Pais</label>								
								<select class="form-control" id="idpais" >                        
									<option>Croacia</option>   
									<option></option> 									
								</select>
							</div><br>	
							
							<div class="form-group">
								<label for="escudo">Adjuntar Escudo </label>								
								<input type="file" id="escudo"><p class="help-block">Selecione la Imagen de su escudo</p>
							</div><br><br>												
							
							<div>
								<button type="submit" class="btn btn-primary">Enviar</button>	
								<br><br>
								<ul class="pager">
									<li><a href="../posicion/posicion.php">Anterior</a></li>
									<li><a href="../integrante/integrante.php">Siguiente</a></li>
								</ul>
							</div>	
							
						</form>
				</div>
			</div>
<?php include ('../layouts/footer.php'); ?>		

