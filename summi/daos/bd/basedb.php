<?php

/* 
 base de datos para iniciar sesion
 * $conttt=mysqli_connect("localhost","root","","bd_enfermero"); 
 */
$host="localhost";
$user="root";
$pass="";
$database="catvirtual";

$url= mysqli_connect($host, $user, $pass, $database);
