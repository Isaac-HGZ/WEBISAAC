<?php

    session_start();


    include 'conexion.php';

    $usuario = $_POST['usuario'];

    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $valida_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$contrasena'");
    $dato = $valida_login->fetch_assoc();

    if (mysqli_num_rows($valida_login) > 0) {
    	$_SESSION['usuario'] = $usuario;
        $_SESSION['id'] = $dato['id'];
    	header("location: ../sesion_iniciada/menu.php");
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