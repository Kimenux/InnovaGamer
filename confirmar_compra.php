

				<?php
				// Permite incluir el script de un archivo, en el archivo donde es llamado
				//include_once, Permite una solo inclusión del archivo
				include_once('php/header.php');
					$i=0;
					$subtotal=0;

				?>

				<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/menu.php');
					
				?>

		<div id="contenido">
				
						<section>
					
							<table  border="3px" class="tabla3" >

								<thead "> 
									<tr>
										<td colspan="2" align="center">Pedido</td> 
									</tr>	 
								</thead>

								<tbody>
									<tr>
										<td >Producto</td>
										<td style=" " align="center">Valor</td>
									</tr>

								<tr>

								<?php 
							
									if (isset($_SESSION['producto'])){	

									while ($i<=$_SESSION['posicion']) {
									$result = get_producto_Byid($_SESSION['producto'][$i]);

										if($datos_productos=$result->fetch_assoc()) { 
										echo "<tr><td>".$datos_productos['nombre']."</td>"."<td align ='center'>".$datos_productos['valor']."</td></tr>";
										}

									$i++;
									$subtotal+=$datos_productos['valor'];

									}
									
									}		
									?>
</tr>

									<tr>
										<td>Total</td>
										<td align="center"><?php echo $subtotal; ?></td>
									</tr>

									<tr>
										<td><a href="php/cancelar_pedido.php" type="submit">Cancelar</td></a>
										<td><button type="submit">Confirmar</button></td>
									</tr>

							
								
							</tbody>
						</table>
					</section>
			</div>
