<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../admin/bd.php';

 if ( !empty($_POST['user']) && !empty($_POST['pass']) ) {

     
     $u=$_POST['user'];
     $p=$_POST['pass'];
     $passwd= md5($p);
      // buscamos si ya exixte el numero telefonico
   
 // añadiría un limit 1 a la consulta pues solo esperamos un registro
$consulta = mysqli_query ($conx, "SELECT 'usuario','pass' FROM `user`  WHERE usuario = '".$u."' AND pass = ' ".$passwd."'");  


if($user = mysqli_fetch_assoc($consulta)) {
    echo "<script type='' >
alert('REGISTRO EXITOSO');
window.location= '../../vendedor/menu.php'
</script>";
} else {
  echo "<script type=''>
alert('usuario y contraseña error');
window.location= '../login.php'
</script>";
}


 }echo "<script type=''>
alert('NO SE INGRESARON TODOS LOS DATOS');
window.location= '../registro.php'
</script>";