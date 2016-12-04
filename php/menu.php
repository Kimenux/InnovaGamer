
<?php if(isset($_SESSION['email'])){ ?>
			

	<?php if ($_SESSION['rol']=='admin') { ?>

<div id="nav">
<div class="FI" id="menu">

			<nav>
			
				<ul  class="nav">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href='formulario-crear-cuenta.php'>Crear Usuario</a> </li>
					<li><a> Juegos</a>
						<ul>
							<li><a href="formulario_categoria.php">Categoria</a></li>
							<li><a href="formulario_stock.php">Stock</a></li>
							<li><a href="formulario_juego.php"">Nuevo</a></li>
							<li><a href="formulario_version.php"">version</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
</div>


<?php } else { ?>	
 
 

<div id="nav">
		 <div class="FI" id="menu">
		 	<nav>
			
				<ul  class="nav">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href="tienda.php">Tienda</a></li>
					<li><a  href="">Foros</a></li>
						
					<li><a href='' >Novedades</a></li>
		
					<li><a href="somos.php">Quienes Somos</a></li>
				
					<li><a href="contacto.php">Contactenos</a></li>					
				    </li>	

				</ul>
			</nav>
		</div>
</div>
		<?php } ?>

		<?php } else { ?>

<div id="nav">
			<div class="FI" id="menu">
			<nav>
			
				<ul  class="nav">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href="tienda.php">Tienda</a></li>
					<li><a  href="">Foros</a></li>
						
					<li><a href='' >Novedades</a></li>
		
					<li><a href="">Quienes Somos</a></li>
				
					<li><a href="">Contactenos</a></li>					
				    </li>	

				</ul>
			</nav>
		</div>
</div>
		<?php } ?>