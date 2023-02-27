<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header ("content-Type: text/html; cherset=UTF-8");

$correo = isset($_POST ['correo']) ? $_POST ['correo']: '';
$nombre = isset($_POST ['nombre']) ? $_POST ['nombre']: '';
$a_pater = isset($_POST ['a_pater']) ? $_POST ['a_pater']: '';
$a_mater = isset($_POST ['a_mater']) ? $_POST ['a_mater']: '';
$password = isset($_POST ['password']) ? $_POST ['password']: '';


$con= new SQLite3('base.db');

$cs = $con -> query ("INSERT INTO login (correo,nombre,a_pater,a_mater,password) VALUES ('$correo','$nombre','$a_pater','$a_mater','$password')");

echo $correo;
echo $nombre;
echo $a_pater;
echo $a_mater;
echo $password;