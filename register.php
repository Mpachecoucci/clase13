<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
   
        <h1>Registrarse</h1>
        <form method="GET">
            <div class="panel">
                Ingrese un email
                <input type="text" name="email" placeholder="email">Ingrese una contraseña
                <input type="password" name="password" placeholder="contraseña">Repita la contraseña
                <input type="password" name="password2" placeholder="repetir contraseña">
                <input type="submit" name="Registrarse" value="Registrarse">
            </div>
        </form>
        <?php 
        	if (isset($_GET["Registrarse"])) {	
        		if ($_GET["password"] == $_GET["password2"]){	
               		$fecha= date("Y-m-d H:i:s");
                	$con = mysqli_connect(HOST, USERNAME, PASSWORD, NOMBREDB);               
                	$ssql="INSERT INTO usuarios (idUsuario, email, password, fechaRegistro) VALUES (NULL, '".$_GET["email"] ."', '".$_GET["password"]."', '".$fecha."');";               
                	$res =mysqli_query($con,$ssql);

                	header('location: http://mattprofe.com.ar:81/alumno/3792/ACTIVIDADES/CLASE_11/login.php');

                }else{
                    echo"<script>alert('Las contraseñas no coinciden')</script>";
                }

        	}
        	

         ?>

        <a href="login.php"> Volver </a>
    
</body>
</html>
