<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "cargacontrol_testdeveloper";

$conn = mysqli_connect($host,$user,$password,$database);
    if(!$conn){
        echo "NO SE HA PODIDO CONECTAR A LA BASE DE DATOS ".' '.$database;
    }
?>