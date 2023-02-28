<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");

$usuario = isset($_POST ['usuario']) ? $_POST ['usuario']: '';
$password = isset($_POST ['password']) ? $_POST ['password']: '';

$usuario2 = '';
$password2 = '';

$con= new SQLite3('data.db');

$cs = $con -> query ("SELECT * FROM login WHERE usuario='$usuario' and password='$password'");

while ($result=$cs -> fetchArray()) {
    $usuario2=$result['usuario'];
    $password2=$result['password'];

}

if ($usuario == $usuario2) {
echo 'Usuario correcto';

    if ($password == $password2) {
        echo 'contraseña correcta';
    }else{
        echo 'contraseña incorrecta';
    }


}else{
    echo 'Usuario incorrecto';
}
echo "<br>";
echo "<br>";

echo $usuario;
echo "<br>";
echo $password;
