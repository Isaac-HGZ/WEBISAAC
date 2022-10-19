<?php

    session_start();


    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $valida_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and clave='$contrasena'");

    if (mysqli_num_rows($valida_login) > 0) {
    	$_SESSION['usuario'] = $correo;
    	header("location: ../menu.php");
        exit;

    }else{
    	echo '
    	   <script>
    	      alert ("El usuario no existe, favor de verificar los datos ingresados");
    	      window.location = "../index.php";
    	    </script>
    	';

         exit;
    }






?>