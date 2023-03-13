<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Document</title>

</head>
<body>

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/sweetalert2@11.js"></script>
    
</body>
</html>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");
session_start();

$correo = isset($_POST ['correo']) ? $_POST ['correo']: '';
$password = isset($_POST ['password']) ? $_POST ['password']: '';
$correo2 = 'ñ';
$password2 = 'ñ';

$con= new SQLite3('base.db');

$cs = $con -> query ("SELECT * FROM login WHERE correo='$correo'");

while ($result=$cs -> fetchArray()){
    $correo2=$result['correo'];

}


if ($correo == $correo2) {

    $cs2 = $con -> query ("SELECT * FROM login WHERE password='$password'");
    $_SESSION['correo']=$correo;

while ($result=$cs -> fetchArray()){
    $password2=$result['password'];
}

if ($password == $password2) {

    
    echo '<script> window.location=("index.php")</script>';

}else{
    echo '
    <script>
        Swal.fire({
            icon: "error",
        title: "Contraseña incorrecta",
      }).then((result) => {
   window.location="login.html"

      })</script>';
} 

}else{
    echo '
    <script>
        Swal.fire({
            icon: "error",
        title: "Correo no registrado",
      }).then((result) => {
   window.location="login.html"

      })</script>';
} 
?>






