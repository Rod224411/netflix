<?php
    require("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="ico.ico">
    <script src="./lib/jquery/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>
<body>
    <header>
        <a href="index.php"><img src="Logo.png" alt=""></a>
    </header>
    <form id="Formulario" class="container" action="./index.php" method="POST">
        <div class="iniciosesion">
            <h3>Inicia sesión</h3>
            <div id="error" class="errorlogin d-none">
                <p><strong>Contraseña incorrecta.</strong> Reinténtalo o <a href=""><u>restablece la contraseña</u></a></p>
            </div>
            <input type="text" name="Email" id="Email" placeholder="Email o número de teléfono">
            <input type="password" id="Password" name="password" placeholder="Contraseña">
            <input id="botoninit" name="botoninit" type="submit" value="Iniciar sesión">
        </div>

        <?php
        if(isset($_POST["botoninit"])){
        $email=$_POST["Email"];
        $password=$_POST["password"];
        $query=mysqli_query($con, "SELECT * FROM logueo WHERE email='".$email."' and pass='".$password."'");
        $numerodecoincidencias=mysqli_num_rows($query);
        if($numerodecoincidencias==1){
            echo '<script language="javascript">alert("FUNCIONÓ");</script>';
        }
        else{
            echo '<script src="main.js"></script>';
        }
        }
        ?>
        
        <div class="text">
            <div class="check">
            <input type="checkbox" name="" id="">
            <span>Recuérdame</span>
            </div>
            <span>¿Necesitas ayuda?</span>
        </div>
        
        <div class="dif">
            <p>¿Primera vez en Netflix?</p>
            <a href="register.php">Suscríbete ahora</a>
        </div>
        
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