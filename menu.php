<?php
     
      session_start();

      if(!isset($_SESSION['usuario'])){
      	echo '
      	   <script>
      	   	  alert("Es necesario iniciar sesion");
      	   	  window.location = "index.php";
      	   </script>
      	';
      	session_destroy();
      	die();
      }


?>




<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
		 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<script type="text/javascript" src="js/sesion.js"></script>
	<title>Telocreo</title>
</head>
<body>
	<header> 
		<div class="sesion">
		<a class="logo" href="#">
			<img src="firma.png" alt="logo de la empresa" class="logo-img">
			<h1>TELOCREO</h1>
</a>
			
			<div class="search">
            <form action="#" class="form-box">
                <input type="text"
                    placeholder="¿Qué estás buscando?"
                    name="search">
                <button>
                    <i class="fa fa-search"
                        style="font-size: 18px; background: #000000; color: white">
                    </i>
                </button>
            </form>
        </div>
   
			
<div class="sess" href="#">
			<img src="rabbit.png" alt="Foto usuario" class="sess-img">
			<h1 class="user">Isaac_GH19</h1>
		<a href="php/cerrar_sesion.php" class="cerrar">Salir</a>
		</div>
			</div>
		<nav>
		<ul class="nav">
				<li><a href=""><img onmouseout="this.src='img/pagina-de-inicio.png';" onmouseover="this.src='img/pag-inicio2.png';" src="img/pagina-de-inicio.png" alt="" width="512" height="512" class="imguno" />Inicio</a></li>
				<li><a href=""><img onmouseout="this.src='img/aprender.png';" onmouseover="this.src='img/aprender2.png';" src="img/aprender.png" alt="" width="512" height="512" class="imguno" />Aprender</a>
					<ul>
						<li><a href="">Versos</a></li>
						<li><a href="">Poema</a></li>
						<li><a href="">Relatos</a></li>
						<li><a href="">Figuras literarias</a>
							<ul>
								<li><a href="">Gramaticales</a></li>
								<li><a href="">De sonido</a></li>
								<li><a href="">De sentido</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href=""><img onmouseout="this.src='img/book.png';" onmouseover="this.src='img/book2.png';" src="img/book.png" alt="" width="512" height="512" class="imguno" />Obras</a>
					<ul>
						<li><a href="">Cuentos</a></li>
						<li><a href="">Poemas</a></li>
						<li><a href="">Leyendas</a></li>
						<li><a href="">Anécdotas</a></li>
					</ul>
				</li>
				<li><a href=""><img onmouseout="this.src='img/noticias.png';" onmouseover="this.src='img/noticias2.png';" src="img/noticias.png" alt="" width="512" height="512" class="imguno" />Noticias</a></li>
			    <li><a href=""><img onmouseout="this.src='img/megafono.png';" onmouseover="this.src='img/megafono2.png';" src="img/megafono.png" alt="" width="512" height="512" class="imguno" />Foro</a></li>
			</ul>
		</nav>
		
	</header>
	
	<div class="cuadroblanco"> <!-- Abre DIV con fondo blanco -->
		<div class="frass">
		  <h1 class="blancas"><strong>¡¿Lo puedes crear o lo puedes creer?!</strong></h1>
			<p><img src="porta.jpg" width="700" height="520" alt=""/></p>
       </div>
	  <div>
		<h3>cerpoo</h3>
	  </div>
   </div> <!-- cierra DIV con fondo blanco -->
	
	
	
	
<footer class="pie">
	<div class="pie1">
	  <div class="pie-11">
		<a class="logo" href="#">
			<img src="firma.png" alt="logo de la empresa" class="logo-img">
			<h1>TELOCREO</h1>
        </a>
	  </div>
      <div class="pie-12">En Telocreo buscamos que el usuario acepte el reto de crear las más extrañas, contundentes, elocuentes, divertidas, irónicas y demás respuestas utilizando el lenguaje escrito combinando un par de palabras y una pizca de ingenio.</div>
      <div class="pie-13">
		  <h1>Síguenos... </h1>
			 	<div class="pie-redes">
			 		<a href="" target="_blank"><img src="img/faceblan.png" alt="facebook"></a>
			 		<a href="" target="_blank"><img src="img/instablan.png" alt="instagram"></a>
			 		<a href="" target="_blank"><img src="img/youtubeblan.png" alt="youtube"></a>
			 	</div>
	  </div>
    </div>
    <div class="pie2">
     	<p style="align-content: center; align-items: center; text-align: center;">Cárdenas, San luis Potosí, México. 2022<br>
			 &copy; 2022 TELOCREO <br/>
				UICSLP CÁRDENAS - Proyecto CMS | LIA V | UICSLP | Isaac Gámez Hernández</p>
	</div>
</footer>
</body>
</html>