<?php
$server='localhost';
$user='root';
$pass='';
$db='proyp1';

$conexion=new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
die("conexion no lograda");
}else{
    echo("Se conecto a la base");
}
?>
