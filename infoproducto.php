<?php
/* Para incluir librerías de base de datos y utilidades */
include_once('db/utilidades_sql.php');
include_once ('php/utilidades.php');
$id=$_GET['id'];
?>
<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/header.php');

				?>

				<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/menu.php');
					
				?>

		

			<div id="contenido">
				<section class="FI" id="ultimos">
					<div class="titulo"><h4>Ultimos</h4></div>

					
						<table class="tabla">
							<thead></thead>
							<tbody>
								<?php include_once('php/ultimos.php');?>
							</tbody>

					</table>
					
				</section>
				
				<section class="FD" id="descripcion">
					<div class="titulo1"><h4>Descripcion del producto</h4></div>
						<?php $result = get_producto_Byid($id); ?>

							<table>
						<?php if($datos_varios=$result->fetch_assoc()) { ?>
								<img class="PREVIEW2"   src="<?php echo $datos_varios['img_preview']?>"/>
								<h4 class="texto2"> <?php echo $datos_varios['_id_juego']?> </h4>
								<h4 class="texto2"> <?php echo $datos_varios['nombre']?> </h4>
								<h4 class="texto2"> <?php echo $datos_varios['sinopsis']?> </h4>
								<h4 class="texto2"> <?php echo $datos_varios['valor']?> </h4>

			<?php } ?>
							</table>
							</section>	

		
		</div>	
		<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/footer.inc');
				?>
