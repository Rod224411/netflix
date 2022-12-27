<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Netflix</title>
    <link rel="icon" type="image/png" href="ico.ico">
</head>
<body>
<header>
        <a href="index.php"><img src="Logo.png" alt=""></a>
    </header>
    <form id="Formulario" class="container" action="./register.php" method="POST">
        <div class="iniciosesion">
            <h3>Registro</h3>
            <input type="text" name="email" id="Email" placeholder="Email o número de teléfono">
            <input  type="password" name="password" id="Password" placeholder="Contraseña">
            <input  type="password" name="conpassword" id="confirm_password" placeholder="Confirmar contraseña">
            <input id="botoninit" name="submit" type="submit" value="Registrarse">
        </div>

        <?php
        require("conexion.php");
        if(isset($_POST["submit"])){
            $email= $_POST["email"];
            $pass=$_POST["password"];
            $con_pass=$_POST["conpassword"];
            $sql= "INSERT INTO logueo (email,pass,con_pass) VALUES('$email','$pass','$con_pass')";
            $result=mysqli_query($con,$sql);
        }

        ?>
        
        <span>Esta página está protegida por Google reCAPTCHA para comprobar que no eres un robot. </span>
        <a href="">Más info.</a>
    </form>
    
    <footer>

    <span>¿Preguntas? Llama al 0-800-52352</span>
    <div class="d-flex justify-content-between">
    <a href="">Preguntas Frecuentes</a>
    <a href="">Centro de ayuda</a>
    <a href="">Términos de uso</a>
    <a href="">Privacidad</a>
    </div>
    <a id="pref" href="">Preferencias de cookies</a>
    <a id="inf" href="">Información corporativa</a>
    
    </footer>
</body>
</html>