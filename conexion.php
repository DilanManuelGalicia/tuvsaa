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

$correo = isset($_POST ['correo']) ? $_POST ['correo']: '';
$nombre = isset($_POST ['nombre']) ? $_POST ['nombre']: '';
$a_pater = isset($_POST ['a_pater']) ? $_POST ['a_pater']: '';
$a_mater = isset($_POST ['a_mater']) ? $_POST ['a_mater']: '';
$password = isset($_POST ['password']) ? $_POST ['password']: '';
$correo2 = '';


$con= new SQLite3('base.db');



 $cs = $con -> query ("SELECT * FROM login WHERE correo='$correo'");

while ($result=$cs -> fetchArray()){
    $correo2=$result['correo'];
}

if ($correo2 == $correo) {
    
    echo '
    <script>
        Swal.fire({
            icon: "error",
        title: "Correo Existente",
      }).then((result) => {
   window.location="registrar.html"

      })</script>';

    #echo '<script>alert("correo existente")</script>';
    #echo '<script> window.location=("registrar.html")</script>';

}else{


    $cs2 = $con -> query ("INSERT INTO login (correo,nombre,a_pater,a_mater,password) VALUES ('$correo','$nombre','$a_pater','$a_mater','$password')");
   # echo '<script>alert("correo registrado")</script>';


    #echo '<script> window.location=("login.html")</script>';

    echo '
    <script>
        Swal.fire({
            icon: "success",
        title: "Correo registrado",
      }).then((result) => {
   window.location="login.html"

      })</script>';
}


?>
