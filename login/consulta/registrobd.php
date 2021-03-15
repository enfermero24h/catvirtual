<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../admin/bd.php';

 if (!empty($_POST['n_comercial']) && !empty($_POST['Whatsapp']) && !empty($_POST['user']) && !empty($_POST['pass']) ) {
//DUPLICADO NEGATIVO
     
     $n_c=$_POST['n_comercial'];
     $wht=$_POST['Whatsapp'];
     $u=$_POST['user'];
     $p=$_POST['pass'];
     $passwd= md5($p);
      // buscamos si ya exixte el numero telefonico
   
     // realizamos la creacion si ya no esta 
   $sql= "INSERT INTO `user` ( `no_comercial`, `whats`, `usuario`, `pass`) "
           . "VALUES ('".$n_c."','".$wht."','".$u."','".$passwd."')";
     if ($conx->query($sql)==true){
        echo "<script type='' >
alert('REGISTRO EXITOSO');
window.location= '../login.php'
</script>";
     }else{
     echo "<script type=''>
alert('No se pudo, realizar el registro, intente mas tarde');
window.location= '../registro.php'
</script>"; 
     }
     
     } echo "<script type=''>
alert('NO SE INGRESARON TODOS LOS DATOS');
window.location= '../registro.php'
</script>";
