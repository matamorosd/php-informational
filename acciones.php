<?php
require_once("ConexionBD.php");

 if($_GET['accion'] == "eliminar")
 {
   mysql_query("delete from aplicaciones where id ='".$_GET['id']."'");
    //cerrarconexion();
   echo' <script>location.href="Administrador.php" </script>'; 
 }

 if($_GET['accion'] == "editar")
 {
   //cerrarconexion();
   echo' <script>location.href="Administrador_Edita.php?id='.$_GET['id'].'" </script>'; 
   
   
 }

 if($_GET['accion'] == "actualizar")
 {
   require_once("ConexionBD.php");
   mysql_query("update aplicaciones set descripcion ='".$_POST['nombre']."' where id ='".$_GET['id']."'");
    //cerrarconexion();
	echo'<script language="javascript">alert("Registro Modificado.");window.location.replace("Administrador.php");</script>';
   echo' <script>location.href="Administrador_Edita.php?id='.$_GET['id'].'" </script>';
 }

?>