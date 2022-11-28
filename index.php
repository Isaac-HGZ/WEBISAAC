<?php

    session_start();

    if (isset($_SESION['usuario'])) {
       header("location: sesion_iniciada/menu.php");
    }
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
<title>LOGIN-TELOCREO</title>
</head>

<body>
<div class="login-todo">
  <div class="imag">
	<img src="img/firma.png" alt="el logo"/> </div>
  <div class="derecha">
    <form action="php/login_usuario.php" method="POST" class="elform">
	  <h1>TELOCREO</h1><br>
	
      <div class="datos">
        <input type="text" name="usuario" id="" placeholder="Nombre de Usuario" > 
        <input type="password" name="contrasena" id="pass" placeholder="Contraseña" >
        <button class="btn-iniciar-sesion">INICIAR SESIÓN</button>

      </div>
      <div class="linea">
		 <hr color="#5F5F5F" size="3px" width="40%" />
         <div class="lao">
           <h3 >O</h3>
         </div>
		   <hr color="#5F5F5F" size="3px" width="40%" /> 
		</div>
		   <a href="sin_sesion/menu_no.html" class="nomenu"> Iniciar en otro momento
    </a> 
		<br/><br/>  <hr color="#5F5F5F" size="3px" />
		
		  <div class="regiss">
			  <h3>¿No tienes una cuenta?</h3><br>
			  <a class="cuenta" href="login2.php">CREAR CUENTA</a>
		</div>
		
    </form> 
  </div>
</div>
</body>
</html>
