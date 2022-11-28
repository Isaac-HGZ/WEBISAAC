<?php

   include 'conexion.php';

   $nombre = $_POST['nombree'];
   $apellido = $_POST['last_name'];
   $usuario = $_POST['usuario'];
   $correo = $_POST['correo'];
   $contrasena = $_POST['password'];

   $contrasena = hash('sha512', $contrasena);

   $query = "INSERT INTO usuarios(nombre, apellido, usuario, correo, clave, fecha) 
   VALUES ('$nombre','$apellido','$usuario','$correo','$contrasena', now())";

// verifica correos repetidos
   $verification = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

   if (mysqli_num_rows($verification) > 0 ){
      echo '
      <script>
      alert("Este correo ya se encuentra en uso");
      window.location = "../login2.php";
      </script>
      ';
      exit();
   }

// verifica usuarios repetidos
   $verification_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

   if (mysqli_num_rows($verification_usuario) > 0 ){
      echo '
      <script>
      alert("Este usuario ya se encuentra en uso");
      window.location = "../login2.php";
      </script>
      ';
      exit();
   }





   $ejecutar = mysqli_query($conexion, $query);

   if ($ejecutar) {
   	echo '
   	<script>
   	   alert ("Usuario almacenado con exito");
   	   window.location = "../index.php";
   	   </script>
   	   ';
    }  else {
   	echo '
   	<script>
   	   alert ("Ups, intenta de nuevo, usuario no almacenado");
   	   window.location = "../login2.php";
   	   </script>
   	   ';
    }

   mysqli_close($conexion);



?>