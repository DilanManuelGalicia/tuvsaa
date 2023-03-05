<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");

$correo = isset($_post ['correo']) ? $_POST ['correo']: '';
$password = isset($_post ['password']) ? $_POST ['password']: '';

$correo2 ='';
$password2 ='';




$con=new SQLite3 ('base.db');
$cs = $con -> query ("SELECT correo, password FROM login WHERE correo='$correo' and password= '$password'");

while ($result = $cs -> fetchArray()) {
    $correo2 = $result ['correo'];
    $password2 = $result ['password'];
    
}


if ($correo == $correo2) {
 
    if ($password == $password2) {
        echo 'Contraseña correcta';
        
    }else{
        echo 'Contraseña incorrecta';
    }


}else{
    echo 'Correo incorrecta';
}



