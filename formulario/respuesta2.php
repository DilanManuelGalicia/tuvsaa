<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");

$usuario = isset($_POST ['usuario']) ? $_POST ['usuario']: '';
$password = isset($_POST ['password']) ? $_POST ['password']: '';


$con= new SQLite3('data.db');

$cs = $con -> query ("INSER INTO login (usuario,password) VALUES ('$usuario','$password')");

echo $usuario;
echo $password;