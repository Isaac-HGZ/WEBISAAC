<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="logincss.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
<title>REGISTRO-TELOCREO</title>
</head>

<body>
	
<div class="centrio-registro">
    <form action="php/registro_usuario.php" method="POST" class="elform-registro">
      <div class="logoletra"><img src="firma.png" width="50" height="50" alt=""/>
  <h1>TELOCREO</h1>
      </div>
		
	  <br>
	
      <div class="datos-registro">
		 <div class="nombre-completo">
		 	<input type="text" name="nombree" id="" placeholder="Nombre"style="width:50%;"> 

		   <input type="text" name="last_name" id="" placeholder="Apellido" style="width: 50%;"> </div> 

	    <input type="text" name="usuario" id="" placeholder="Nombre de Usuario" aria-required="true" autocapitalize="off"  autocorrect="off" maxlength="30"> 
       
        <input type="text" name="correo" id="" placeholder="Correo"> 
       
        <input type="password" name="password" id="pass" placeholder="Contraseña" autocomplete="new-password" autocorrect="off">
        <h2>Fecha de nacimiento</h2>
       
        <input type="date" name="born" id="" placeholder="Fecha de nacimiento">
        <button class="btn-registrarse">REGISTRARSE</button>
      </div>
      <div class="linea">
		 <hr color="#5F5F5F" size="3px" width="40%" />
         <div class="lao">
           <h3 >O</h3>
         </div>
		   <hr color="#5F5F5F" size="3px" width="40%" /> 
		</div>
		   <a href="" class="facebook">
<!--       <span class="fontawesome-facebook"></span> -->
      <i class="fa fa-facebook"  style="font-size: 18px; background:#3a589a; width: 20px; color: white; margin-right: 5px;" ></i>Iniciar sesión con Facebook
    </a> 
		<br/><br/>  <hr color="#5F5F5F" size="3px" />
		
		  <div class="regiss">
			  <h3>¿Ya tienes una cuenta?</h3><br>
			  <a class="cuenta" href="login1.php">Iniciar Sesión</a>
		</div>
		
    </form> 
  </div>

</body>
</html>
