<?php 
  session_start();
  include ('../layouts/header.php');
?>

<?php
	include('../../libs/adodb5/adodb-pager.inc.php');
	include('../../libs/adodb5/adodb.inc.php');
	include('../../models/Conexion.php');
	include('../../models/Modelo.php');
	include('../../models/Revista.php');
	include('../../controllers/RevistaController.php');
	include('../../libs/Er.php');		
	
	if(isset($_POST['nombre'])){//exclusivo para imprimir arreglos, verifica que nombre tenga algo

  $revistaC = new RevistaController();
  $revistaC->insertaRevista($_POST);//manda llamar la accion
 }
?>

	
	<div class="container">
		<div class="row">
			<div class="col-md-4">					 
				<form id="id_revista" method="post" action=""  role="form">
					<div class="form-group">						
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Revista" required>
					</div>
										
					<label for="fecha">fecha:</label>
                    <div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
					</div> <br>
					<div class="form-group">
						<label for="fecha">volumen:</label>
						<input type="text" class="form-control" id="volumen" name="volumen" placeholder="introduzca el volumen"required>
					</div>
					<div class="form-group">
						<label for="titulo">Titulo:</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="introduzca el titulo" required>
					</div>	
					<div class="form-group">
						<label for="subtitulo">Subtitulo:</label>
						<input type="text"" class="form-control" id="subtitulo" name="subtitulo" placeholder="introduzca el subtitulo" required>
					</div>
					<div class="form-group">
						<label for="numero">Numero:</label>
						<input type="text" class="form-control" id="numero" name="numero" placeholder="introduzca el numero" required>
					</div>
					<div class="form-group">
						<label for="clave">Clave:</label>
						<input type="text" class="form-control" id="clave" name="clave" placeholder="introduzca la clave" required>
					</div>
					<div class="form-group">
						<label for="directorio">Directorio:</label>
						<input type="text" class="form-control" id="directorio" name="directorio" placeholder="introduzca el directorio" required>
					</div>
					<div class="form-group">
						<label for="editorial">Editorial:</label>
						<input type="text" class="form-control" id="editorial" name="editorial" placeholder="introduzca la editorial" required>
					</div>
					<div class="form-group">
						<label for="portada">Adjuntar Portada </label>			<input type="file" id="portada"><p class="help-block">Selecione la Imagen de su portada</p>
					</div>
					
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
	<script type="text/javascript">
            $(function() {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
      
<?php include ('../layouts/footer.php'); ?>