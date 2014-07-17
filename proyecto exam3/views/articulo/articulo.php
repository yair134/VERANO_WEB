<?php 
  session_start();
  include ('../layouts/header.php');
?>

<?php
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	include('../../models/Articulo.php');
	include('../../controllers/ArticuloController.php');
	include('../../libs/Er.php');
	
	if(isset($_POST['nombre'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo

  $articuloC = new ArticuloController();
  $articuloC->insertaArticulo($_POST);//manda llamar la accion
 }
	
?>

	<div class="container">
		<div class="row">
			<div class="col-md-4">					 
				<form id="id_articulo" method="post" action=""  role="form">
					<div class="form-group">						
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Articulo" required>
					</div>										
					
					<div class="form-group">
						<label for="resumen">Resumen:</label>
						<textarea  type="text" class="form-control" id="resumen" name="resumen" placeholder="introduzca el resumen"required></textarea>
					</div>
					<div class="form-group">
						<label for="abstract">Abstract:</label>
						<textarea type="text" class="form-control" id="abstract" name="abstract" placeholder="introduzca el abstract" required></textarea>
					</div>	
					<div class="form-group">
						<label for="introduccion">Introduccion:</label>
						<textarea type="text"" class="form-control" id="introduccion" name="introduccion" placeholder="introduzca la introduccion" required></textarea>
					</div>
					<div class="form-group">
						<label for="metodologia">Metodologia:</label>
						<textarea type="text" class="form-control" id="metodologia" name="metodologia" placeholder="introduzca la metodologia" required></textarea>
					</div>
					<div class="form-group">
						<label for="contenido">Contenido:</label>
						<textarea type="text" class="form-control" id="contenido" name="contenido" placeholder="contenido" required></textarea>
					</div>
					<div class="form-group">
						<label for="concluciones">Concluciones:</label>
						<textarea type="text" class="form-control" id="conclusiones" name="conclusiones" placeholder="introduzca conclusiones" required></textarea>
					</div>
					<div class="form-group">
						<label for="agradecimientos">Agradecimientos:</label>
						<textarea type="text" class="form-control" id="agradecimientos" name="agradecimientos" placeholder="introduzca los agradecimientos" required></textarea>
					</div>
					<div class="form-group">
						<label for="referencias">Referencias:</label>
						<textarea type="text" class="form-control" id="referencias" name="referencias" placeholder="introduzca referencias" required></textarea>
					</div>
					
					<label for="fecha_creacion">fecha de creacion:</label>
                    <div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
					</div> <br>
					
					
					<div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div><br><br>
					
				</form>	
			</div>
		</div>
		<div>
			<ul class="pager">
				<li><a href="../autor/autor.php">Anterior</a></li>
				<li><a href="../articulo/articulo.php">Siguiente</a></li>
			</ul>
		</div>		
	</div>


      
<?php include ('../layouts/footer.php'); ?>