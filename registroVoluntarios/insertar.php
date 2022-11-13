<html>
<head>
<meta charset="utf-8">
<title>Preservación</title>
<link href="css/inscribete.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div>
		<header>
			<div>
			<img src="imagenes/Logo Intilpa1.jpg">
			</div>
		</header>
		
		<nav>
			<ul class="menu">
				<li><a href="Inicio.html">Nosotros</a></li>
				<li><a href="Reciclaje.html">Reduce, Reutiliza, Recicla</a></li>
				<li><a href="Campañas.html">Campañas</a></li>
				<li><a href="Contactanos.html">Contactanos</a>
				</li>
			</ul>
		</nav>
		
		<main>
			<div class="group">
				<form action="cod_registro.php" method="POST">
				<h2><em>Formulario de Registro</em></h2>
				
					<label for="dni">DNI</label>
					<input type="text" id="dni" name="dni" class="form-input" required/>

					<label for="nombre">Nombres</label>
					<input type="text" id="nombre" name="nombre" class="form-input" required/>   
					
					<label for="apellido">Apellidos</label>
					<input type="text" id="apellido" name="apellido" class="form-input" required/>

					<label for="edad">Edad</label>
					<input type="text" id="edad" name="edad" class="form-input" required/> 
					
					<label for="ciudad">Ciudad</label>
					<input type="text" id="ciudad" name="ciudad" class="form-input" required/> 
					
					<label for="email">Correo</label>
					<input type="email" id="email" name="email" class="form-input" required/>

					<label for="telefono">Telefono</label>
					<input type="text" id="telefono" name="telefono" class="form-input" required/>
				    
					<input class="form-btn" name="submit" type="submit" value="Suscribirse" />
					<input type="reset" value="Borrar">

				  </p>
				</form>
			  </div>
		
		
		</main>
        <footer>
				
			<p><a href="Inicio.html">Nosotros</a></p>
				
			<img class="logofinal" src="imagenes/logo Intimpa2.JPG">
				
			<div class="links">
			
				<ul style="list-style-type:none">
				  	<li><a href="Sostenibilidad.html">Sostenibilidad</a></li>
					<li><a href="Preservacion.html">Preservacion</a></li>
					<li><a href="Reciclaje.html">Reduce, Reutiliza, Recicla</a></li>
				</ul>
			
				<ul style="list-style-type:none">
				  	<li><a href="Campañas.html">Campañas</a></li>	
					<li><a href="Inscribete.html">Inscribete</a></li>
					<li><a href="Contactanos.html">Contactanos</a></li>
				</ul>
			</div>		
			
			<p style="text-align:center">Copyright 2022 © IntimpaTM</p>
			
			<div class="redes" style="text-align: center, width 100%">
				<a href="https://twitter.com" target="blank"><img src="imagenes/twitter.png"></a>
				<a href="https://wwww.facebook.com" target="blank"><img src="imagenes/Facebook.jpeg"></a>
				<a href="https://www.instagram.com/" target="blank"><img src="imagenes/instagram.png"></a>
			</div>
		</footer>

</body>
</html>