<?php
	include("credenciales.php");
    if (isset($_GET["login"])) {
    	$user= $_GET["email"];
    	$pass= $_GET["password"];
        $admin = "admin";
    	$conexion = mysqli_connect(HOST,USERNAME,PASSWORD,NOMBREDB);
    	$queryusuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email ='$user' and password = '$pass'");
    	$verificacion = mysqli_num_rows($queryusuario);
    	if ($verificacion == 1) {
         	session_start();
         	$_SESSION['email']=$user;
         	$_SESSION['password']=$pass;
            $_SESSION['admin']=$admin;

         	header('Location:panel.php');

    	}else{

        	echo"<script>alert('Contraseña o email incorrecto')</script>";

    	}
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<title>login</title>
</head>
<body>
	<h1> Webgenerator Marcos Pacheco Ucci </h1>
	<form method="GET">
		<div class="panel">	
			<input type="email" name="email" placeholder="email">
			<input type="password" name="password" placeholder="contraseña">
			<input type="submit" name="login" value="Login">
		</div>
	</form>
	<a href="register.php"> Registrarse </a>

</body>
</html>