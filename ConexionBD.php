<?php

 $servidor="127.0.0.1";
 $database ="android";
 $username ="root";
 $password =""; 

 $conection= mysql_connect($servidor,$username,$password) or trigger_error(mysql_error(),E_USER_ERROR);//conexion de la base de datos
 
  mysql_select_db($database, $conection) or die("Error al conectar la base de datos");//seleccion de la base de datos
  
  /* function cerrarconexion()
   { 
        global $conection; 
        mysql_close( $conection);
   } 
  */

?>

<?php
/*
$mysql_hostname = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "android";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Error al conectar la base de datos");

mysql_select_db($mysql_database, $bd) or die("Error al conectar la base de datos");*/
?>