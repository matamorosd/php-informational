<?php

include('Verifica.php');

?>
<?php
  require_once("ConexionBD.php");

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PLANETA ANDROID</title>
<link rel="shortcut icon" href="Imagenes/favicon.ico" type="image/ico" />
<link href="Estilo.css" rel="stylesheet" type="text/css" />


<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<style>
.id{width:50px; padding:3px 3px; border:1px solid #003300; float:left;}
.desc{width:250px; padding:3px 3px; border:1px solid #003300; float:left;}
.accion{width:50px; padding:3px 3px; float:left;}
.contenedor{width:490px; float:left;}
</style>
<script>
 function eliminar(id)
   { 
     if(confirm("Desea eliminar este registro"))
	 {
	  location.href="acciones.php?accion=eliminar&id="+id;
	 }
   } 
</script>
<body>

<!---Encabezado---->
   <div id="EncabezadoBanner">
   </div><!--Banner -->

   <div id="Menu">
			<ul>
             
				<li><a href="InicioAdministrador.php">Inicio</a></li>
                <li><a href="Administrador.php">Mantenimiento</a></li>
               
         		<li>Hola,<?php echo "  ".$login_session."   !!!"; ?> <a href="Salir.php">(Salir)</a></li>
               
			</ul>
</div><!--Menu Encabezado  -->

   <div class="columna1">
<h2>Que accion desea realizar?</h2>
<li><a href="AdministradorUsuarios.php">Usuarios Unidos a Planeta Android</a></li>
<li><a href="AdministradorDescargas.php">Top Descargas</a></li>
<li><a href="AdministradorTopUsuarios.php">Top Usuarios</a></li>
<li><a href="AdministradorTopAplicaciones.php">Top Aplicaciones</a></li>
<li><a href="Administrador.php">Mantenimiento de Aplicaciones</a></li>
</div> <!--Columna 1 lado Izquierdo-->

   <div class="columna2">
   
  <h2>MANTENIMIENTO DE APLICACIONES</h2>
   <table width="497" border="1" align="center">
  <tr>
    <td width="604">
    <?php
	 
	 $re = mysql_query("select * from aplicaciones");//lista de la base de datos
	 //cerrarconexion();
	 while($f = mysql_fetch_array($re)){ //creacion dinamica
	 
	 ?> 
    <div class="contenedor">
    <div class="id"><?php echo $f['id'] ?> </div>
     <div class="desc"><?php echo $f['descripcion'] ?> </div>
    <div class="accion"><a href="acciones.php?accion=editar&id=<?php echo $f['id'] ?>">editar</a></div>
    <div class="accion"><a href="#" onClick="eliminar('<?php echo $f['id']?>')">eliminar</a></div>
    </div>
    <?php  } ?>
    </td>
  </tr>
</table>



</div> <!--Columna 2 Enmedio-->

  <div class="columna3">

     <div align="center" class="columna3">
    
     </div>
    
</div>  <!--Columna 3 lado Derecha-->

	  <div id="pie">

      Proyecto Negocios Web |  &copy; 2012 | Diseñado por Karen Flores, Benjamin Bardales , David Matamoros y Miguel Villalobos.<br/>
      Universidad Cat&oacute;lica de Honduras
     </div> <!--Pie de pagina-->
     
     
</body>
    </html>