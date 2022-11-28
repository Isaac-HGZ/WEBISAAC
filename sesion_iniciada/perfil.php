<?php
include("../php/conexion.php");
      session_start();
      if(!isset($_SESSION['usuario'])){
      	echo '
      	   <script>
      	   	  alert("Es necesario iniciar sesion");
      	   	  window.location = "../index.php";
      	   </script>
      	';
      	session_destroy();
      	die();
      }

      $iduser = $_SESSION['usuario'];
$sql = "SELECT usuario, nombre FROM usuarios WHERE usuario='$iduser'";
$resultado =$conexion->query($sql);
$row = $resultado->fetch_assoc();
$sql2 = "SELECT usuario, usuario FROM usuarios WHERE usuario='$iduser'";
$resultado2 =$conexion->query($sql2);
$row2 = $resultado2->fetch_assoc();
$sql3 = "SELECT usuario, avatar FROM usuarios WHERE usuario='$iduser'";
$resultado3 =$conexion->query($sql3);
$row3 = $resultado3->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
  <script type="text/javascript" src="js/sesion.js"></script>
  <link rel="icon" type="img" href="img/firma.png">
	<title>Perfil</title>
</head>
<body>
<script src="main.js" type="text/javascript"></script>
<header id="navar"> 
    <div class="sesion">
   <a class="logo" href="menu.php">
      <img src="../img/firma.png" alt="logo de la empresa" class="logo-img">
      <h1 class="h1">TELOCREO</h1></a>
      
   <div class="search">
            <form action="#" class="form-box">
                <input type="text"
                    placeholder="¿Qué estás buscando?"
                    name="search">
            </form>
     </div>
     <div class="sess">
        <a href="perfil.php?id=<?php echo $_SESSION['id']; ?>">
      <div class="logi"> 
        <img class="fotolo" src="<?php echo $row3['avatar']; ?>" width="50px"> 
      </div> </a>
      <a href="perfil.php?id=<?php echo $_SESSION['id']; ?>"> 
          <div class="user2">
      <span class="user">
        <?php echo utf8_decode($row['nombre']); ?>
      </span>
      <span class="user">
        <small>@</small><?php echo utf8_decode($row2['usuario']); ?>
      </span>
      </div>
    </a>
        <a class="cerrar" href="../php/cerrar_sesion.php">Salir</a>
   </div>
  </div>

<!-- Barra de navegacion (enlaces) -->
    <nav>
    <ul class="nav">
        <li><a href="menu.php"><img onmouseout="this.src='img/pagina-de-inicio.png';" onmouseover="this.src='img/pag-inicio2.png';" src="img/pagina-de-inicio.png" alt="inicio foto" width="512" height="512" class="imguno" />Inicio</a></li>
        <li><a href="aprende_sesion.php"><img onmouseout="this.src='img/aprender.png';" onmouseover="this.src='img/aprender2.png';" src="img/aprender.png" alt="aprender foto" width="512" height="512" class="imguno" />Aprender</a>
        <!--  <ul>
            <li><a href="aprender_html/comunicacion.html">Comunicación</a></li>
            <li><a href="aprender_html/funciones_lengua.html">Lengua</a></li>
            <li><a href="aprender_html/tipos_textos.html">Textos</a></li>
            <li><a href="aprender_html/tipos_palabras.html">Palabras</a>
            </li>
          </ul> -->
        </li>
        <li><a href="obras_sesion.php"><img onmouseout="this.src='img/book.png';" onmouseover="this.src='img/book2.png';" src="img/book.png" alt="img obras" width="512" height="512" class="imguno" />Obras</a>
          <!-- <ul>
            <li><a href="obras_html/libros_obras.html">Libros</a></li>
            <li><a href="obras_html/poemas_obras.html">Poemas</a></li>
            <li><a href="obras_html/leyendas_obras.html">Leyendas</a></li>
            <li><a href="obras_html/fabulas_obras.html">Fabulas</a></li>
          </ul>-->
        </li>
          <li><a href="foro_sesion.php"><img onmouseout="this.src='img/megafono.png';" onmouseover="this.src='img/megafono2.png';" src="img/megafono.png" alt="img foro" width="512" height="512" class="imguno" />Foro</a></li>
          <li><a href="nosotros_sesion.php"><img onmouseout="this.src='img/nosotros.png';" onmouseover="this.src='img/nosotros2.png';" src="img/nosotros.png" alt="img nosotros" width="512" height="512" class="imguno" />Nosotros</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="cuadroblanco"> <!-- Abre DIV con fondo blanco -->


	

	<?php
	if (isset($_GET['id'])){
    require ("../php/conexion.php");
    $solicitar = $conexion->query("SELECT * FROM usuarios WHERE id = '".$_GET['id']."' ");
    $row = $solicitar->fetch_assoc();
    ?>

    perfil de: <?php echo $row['usuario']; ?>
	 <br>

	Registrado desde : <?php echo $row['fecha']; ?> <br>
	Foto de perfil: <img src="<?php echo $row['avatar']; ?>" width="100"> <br><br>


<!-- php mostrar formulario a usuario registrado -->
 <?php if($_GET['id'] == $_SESSION['id']) { ?> 
  <form method="POST" action="" enctype="multipart/form-data"> 
  <input type="file" name="imagen">
  <input type="submit" name="subir" value="subir">
  </form>
  <?php } ?> 
  
  <!-- php subir archivo-->
  <?php
  if(isset($_POST['subir'])) {
      
      $ruta = "fotosperfil/";
      $fichero = $ruta.basename($_FILES['imagen']['name']);
      $rut = $ruta.$_GET['id'].".jpg";
      if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.$_GET['id'].".jpg")) {
      	
      	require ("../php/conexion.php");
      	$insertar = $conexion->query("UPDATE usuarios SET avatar = '$rut' WHERE id = '".$_GET['id']."'");
        header("location: perfil.php?id=".$_GET['id']." ");


      }
    }
  ?>


	<?php } ?>

  <h2>NOTA: solo admite imagenes jpg</h2>


   </div> <!-- cierra DIV con fondo blanco -->
  
  
  
<!-- Pie de la pagina -->
<footer class="pie">
  <div class="pie1">
    <div class="pie-11">
    <a class="logo" href="menu.php">
      <img src="../img/firma.png" alt="logo de la empresa" class="logo-img">
      <h1 class="h1">TELOCREO</h1>
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