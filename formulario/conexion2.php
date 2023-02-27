<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");

$nombre = isset($_post ['nombre']) ? $_POST ['nombre']: '';
$password = isset($_post ['password']) ? $_POST ['password']: '';

$nombre2 ='';
$password2 ='';

$con=new SQLite3 ('base.db');
$cs = $con -> query ("SELECT * FROM login WHERE nombre='$nombre' and password= '$password'");

while ($result = $cs -> fetchArray()) {
    $nombre2 = $result ['nombre'];
    $password2 = $result ['password'];
    
}

if ($nombre == $nombre2) {
    if ($password == $password2) {

        echo 'usuario y contraseña correcta';
    }else{

        echo 'usuario y contraseña incorrecta';

    }

}else{
 
    echo 'usuario y contraseña incorrecta';
    
}

echo "<br>";
echo "<br>";

echo $nombre;
echo "<br>";
echo $password;


