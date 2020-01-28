<?php
  require_once("ConexionBD.php");
   $re = mysql_query("select id,descripcion from aplicaciones where id='".$_GET['id']."'");
   $f = mysql_fetch_array($re);
    //cerrarconexion();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PLANETA ANDROID</title>
<link rel="shortcut icon" href="Imagenes/favicon.ico" type="image/ico" />
<link href="Estilo.css" rel="stylesheet" type="text/css" />


</head>

<body>

<!---Encabezado---->
   <div id="EncabezadoBanner">
   </div><!--Banner -->

   <div id="Menu">
			<ul>
				<li></li>
			</ul>
</div><!--Menu Encabezado  -->

   <div class="columna1">

</div> <!--Columna 1 lado Izquierdo-->

   <div class="columna2">
    <h2>MOFICACION DE REGISTROS</h2>
   <form id="form1" name="form1" method="post" action="acciones.php?accion=actualizar&id=<?php echo $_GET['id']; ?>">
  <table width="374" border="1" align="center">
    <tr>
      <td width="67">Nombre:</td>
      <td width="291"><label for="nombre"></label>
          <input type="text" name="nombre" id="nombre" value="<?php echo $f['descripcion'] ?>"/>
      </td>
    </tr>
    
      <td colspan="2"><label>
        <input type="submit" name="button" id="button" value="Guardar" />
        </label>
          <div align="justify"></div></td>
    </tr>
  </table>
</form>
 

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