<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");

$correo = isset($_POST ['correo']) ? $_POST ['correo']: '';
$password = isset($_POST ['password']) ? $_POST ['password']: '';
$correo2 = 'ñ';
$password2 = 'ñ';

$con= new SQLite3('base.db');

$cs = $con -> query ("SELECT correo, password FROM login WHERE correo='$correo' and password='$password'");

while ($result=$cs -> fetchArray()){
    $correo2=$result['correo'];
    $password2=$result['password'];
}

/* print_r($result);
echo '<br>';
echo $correo2;
echo $password2; */

if ($correo == $correo2) {
    
    if ($password == $password2) {
        echo '<script> window.location=("index.html")</script>';
    }else{
        echo '<script>alert("Correo o contraseña incorrecto")</script>';
        echo '<script> window.location=("login.html")</script>';
    }
}else{
    echo '<script>alert("Correo o contraseña incorrecto")</script>';
        echo '<script> window.location=("login.html")</script>';
} 
?>