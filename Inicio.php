<?php

include('Verifica.php');

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
             
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Categorias.php">Categorias</a></li>
				<li><a href="Que_es.php">Que es Android?</a></li>
                <li><a href="Ayuda.php">Ayuda</a></li>
				<li><a href="Contactenos.php">Contactenos</a></li>
                  
         		<li>Hola,<?php echo "  ".$login_session."   !!!"; ?> <a href="Salir.php">(Salir)</a></li>
               
			</ul>

</div><!--Menu Encabezado  -->

   <div class="columna1">
      <h3 align="center"> TOP DESCARGAS</h3>
         <hr width="150px"/>
   <?php 
	$xxql = "SELECT aplicaciones.descripcion, count(app_usuario.usuario) as cuenta FROM app_usuario join aplicaciones on app_usuario.app = aplicaciones.id GROUP BY app ORDER BY cuenta DESC LIMIT 10";
	$xql = mysql_query($xxql);
	echo '<ol>';
	while($row = mysql_fetch_array($xql))
	{
	echo '<li>'.$row['descripcion'].'</li>'; 
	//echo "<br/>";
	}
	echo '</ol>';
   ?>
   
   <h3 align="center"> TOP USUARIOS</h3>
   <hr width="150px"/>
    <?php
$result=mysql_query("select distinct user from usuario order by RAND() LIMIT 5");

 echo '<ol>';
  while ($row=mysql_fetch_array($result)) {
 
echo '<li>'.$row['user'].'</li>';

}
echo '</ol>';
?>
 <h3 align="center"> TOP APLICACIONES</h3>
 <hr width="150px"/>
    <?php
$result=mysql_query("select distinct descripcion from aplicaciones order by RAND() LIMIT 10");

 echo '<ol>';
  while ($row=mysql_fetch_array($result)) {
 
echo '<li>'.$row['descripcion'].'</li>';

}
echo '</ol>';
?>
	 <div align="center"><img src="Imagenes/anuncios-android.png"  width="149" height="117"/></div>
</div> <!--Columna 1 lado Izquierdo-->

   <div class="columna2">

      <h2>Bienvenido(A) al Planeta Android</h2>

      <blockquote><img class="myimage2" src="Imagenes/android-wallpapers-34.jpg" />
	        El lugar donde encuentras todas las aplicaciones disponibles para tu Android
      </blockquote>

      <p align="justify">Somos un sitio web que contiene aplicaciones para Android. Aqui encontraras las aplicaciones mas populares          segun la prensa o lo blogs. Nuestro sitio tambien te recomientda aplicaciones basandose en tus preferencias. Cada aplicacion          tiene su imagen de pantalla, una descripcion y las opciones de los usuarios.
	  </p>

      <h2>Novedades:</h2>

      <p>
	     Android recibe una nueva version de PayPal en aplicaciOn
         Los usuarios de dispositivos Android que tienen costumbre de hacer uso del servicio de pagos proporcionado por PayPal, ya se         encuentran con una versión actualizada de la aplicación.

         Por un lado, los responsables de la herramienta le han hecho un lavado de cara completo, mejorando la interfaz de usuario y         haciendo que la navegación sea más sencilla tanto en smartphones como en tablets.

         Por otro lado, se añade un nuevo widget que no sólo proporciona acceso rápido, sino que permite realizar operaciones         financieras a través de NFC.
	 </p>
	 
       <p align="center"><img src="Imagenes/PayPal-Android.jpg" width="232" height=   
	          "323" align="absmiddle" />
	   </p>
	  

</div> <!--Columna 2 Enmedio-->

  <div class="columna3">

      <h2>Siguenos........</h2>
      <div align="center">
        <p><a href="http://www.facebook.com"><img src="Imagenes/Facebook.jpg" class="myimage"/></a></p>
      </div>
      <div align="center"><a href="http://www.twitter.com"><img src="Imagenes/twitter.jpg" class="myimage"/></a></div>
      <div align="center">
        <p><a href="http://www.feedburner.com"><img src="Imagenes/Otra.jpg" class="myimage"/></a></p>
        <p>&nbsp;</p>
      </div>
      

	 
  </div>  <!--Columna 3 lado Derecha-->

	  <div id="pie">
      Proyecto Negocios Web |  &copy; 2012 | Diseñado por Karen Flores, Benjamin Bardales , David Matamoros y Miguel Villalobos.<br/>
      Universidad Cat&oacute;lica de Honduras
     </div> <!--Pie de pagina-->
</body>
    </html>
