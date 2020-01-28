<?php

include('Verifica.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categorias</title>
<link rel="shortcut icon" href="http://img.xatakandroid.com/lp2/samsung-24-11-2011/images/favicon.ico" type="image/ico" />
<link href="Estilo.css" rel="stylesheet" type="text/css" />
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

  <div id="EncabezadoBanner">
  </div> <!--Banner -->

  <div id="Menu">
			<ul>
				<li><a href="Inicio.php">Inicio</a></li>
				<li><a href="Categorias.php">Categorias</a></li>
				<li><a href="Que_es.php">Que es Android?</a></li>
                <li><a href="Ayuda.php">Ayuda</a></li>
				<li><a href="Contactenos.php">Contactenos</a></li>
                <li>Hola,<?php echo "  ".$login_session."   !!!"; ?> <a href="Salir.php">(Salir)</a></li>
			</ul>
  </div> <!--Menu Encabezado  -->

  <div id="Espacio"></div> <!--Espacio en blanco-->

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
	 <div align="center"><img src="Imagenes/anuncios-android.png" width="149" height="117"/></div>
   			
  </div> <!--Columna 1 lado Izquierdo-->

  <div class="columna2">

  <h2>Categorias</h2>
    <div>
        <h2><a href="Categorias/Multimedia.php">Multimedia</a></h2>
        <h3 align="center">Audio Manager</h3>
        <p align="justify"> <a href="http://www.mediafire.com/?hnfr2e0lhjkawoa"><img src="Imagenes/Categorias/Multimedia/Audio Manager.png"   title="Click para descargar" class="myimage2" /></a>
	      Descripción Version completa del popular controlador de volumenAudioManager Widget.
            Reconocida en el libro "Best Android Apps" por O'Reilly como la mejor aplicación de manejo de Audio en Android.
            Audio Manager es un controlador que permite ver y ajustar los niveles de todos tus volumenes en tu celular Android.
		    Haz click en el control para ajustar los niveles de cada uno de los volumenes. Guarde sus configuraciones de
	        audio como "perfiles",cree acceso directo a sus perfiles o utilize el planificador para automáticamente aplicar sus      
          configuraciones de acuerdo a la hora y el día. </p>
		   <p align="right"><a href="Categorias/Multimedia.php">Ver mas >>>>>>>>>></a></p>
    </div>

   <div>
         <h2><a href="Categorias/Herramientas.php">Herramientas</a></h2>
		 <h3 align="center">App 2 Sd </h3>
          <p align="justify"> <a href="http://www.mediafire.com/?hnfr2e0lhjkawoa"><img src="Imagenes/Categorias/Herramienta/App 2 Sd.png"  title="Click para descargar" height="118" class="myimage2" /></a>
		     App 2 SD helps you to get more free internal phone storage space
             App 2 SD le ayudará a obtener más espacio libre en la memoria interna de su teléfono o tablet.
             ¿Se está quedando sin espacio para sus aplicaciones?
             ¿Está harto de comprobar manualmente si cada aplicación que instalas se puede mover a la memoria externa?</p><br />
			  <p align="right"><a href="Categorias/Herramientas.php"> Ver mas >>>>>>>>>></a></p>
   </div>

  <div>
        <h2><a href="Categorias/Juegos.php">Juegos</a></h2>
        <h3 align="center">Capitan America</h3>
        <p align="justify">  <a href="http://www.mediafire.com/?hnfr2e0lhjkawoa"><img src="Imagenes/Categorias/Juegos/Capitan America.png"  title="Click para descargar" align="right" class="myimage2" /> </a>
		   ¡Impresionantes gráficos en HD!¡Juega como Capitán América: el Primer navegador mientras detienes a la Calavera roja que           intenta destruir el equilibro del poder!¡Centinela de la Libertad cuenta con sensacionales gráficos HD optimizados para           Pantallas Retina! Juega como el Súper soldado Capitán América en este juego de acción épica. Durante el desencadenamiento           de la Segunda Guerra Mundial, la Calavera roja lidera la organización HYDRA mientras crean super armas que cambiarán la           situación de guerra. Como si fuera poco, Falsworth, Dum Dum Dugan y Bucky han sido capturados. Ve detrás de las líneas del           enemigo para recatarlos y terminar con la conspiración siniestra. Usa tu escudo irrompible para luchar, bloquear y           maniobrar tu camino en lo que parece ser una misión suicida.        </p>
		    <p align="right"><a href="Categorias/Juegos.php">Ver mas >>>>>>>>>></a></p>
  </div>

   <div>
        <h2><a href="Categorias/Salud.php">Salud</a></h2>
        <h3 align="center">iFitness</h3>
        <p align="justify"> <a href="http://www.mediafire.com/?hnfr2e0lhjkawoa"><img src="Imagenes/Categorias/Salud/iFitness.png"   title="Click para descargar" class="myimage2" /></a>
            Cientos de ejercicios, videos, rutinas y capacidad de seguimiento de su progreso!
            * VENTA POR TIEMPO LIMITADO
		    * Hit aplicación para el iPhone ya está disponible para Android! Alcanzar su meta de 
		    conseguir y mantenerse en forma con iFitness! .iFitness ofrece 300 ejercicios, textos
			 y la instrucción de vídeo, más de 20 rutinas, la tala y la representación gráfica habilidades - todo dentro de la palma            de su mano. El seguimiento de su peso, importar los datos de iPhone, y mucho más!        </p>
			  <p align="right"><a href="Categorias/Salud.php">Ver mas >>>>>>>>>></a></p>
   </div>

   <div>
      <h2><a href="Categorias/Medicina.php">Medicina</a></h2>
      <h3 align="center">Baby Care Plus</h3>
        <p align="justify"> <a href="http://www.mediafire.com/?hnfr2e0lhjkawoa"><img src="Imagenes/Categorias/Medicina/Baby Care Plus.png"  title="Click para descargar" class="myimage2" /></a>Descripción
           El seguimiento de su bebé crece, ayuda a convertirse en padres más experimentados!
           Cuidado del bebé - se alimenta de pista bebé, duerme, bebe cacas (hacer pipí), el crecimiento del bebé y más, el apoyo a           múltiples recordatorio para que los padres / cuidadores recordar a cuidar del bebé cuando está ocupado.
           También puede utilizar esta herramienta para escribir el diario del bebé, agregar la foto del bebé, grabación de voz y           compartir con amigos.        </p>
		    <p align="right"><a href="Categorias/Medicina.php">Ver mas >>>>>>>>>></a></p>
   </div>

   <div>
        <h2><a href="Categorias/Wallpapers.php">Wallpapers</a></h2>
		 <p> <img src="Imagenes/Categorias/Wallpapers/Android1.jpg"class="myimage2"   title="Click para descargar"/>
       <p> Si eres adicto a cambiar el wallpaper, y usualmente no te dura la misma imagen mas de un día 
	       en el escritorio, es probable que te guste la idea de darte una pasadita por nuestra gran colleccion de 
		   wallpapers de todo tipo y sabes lo mejor aun son GRATIS!!! </p>
		    <p align="right"><a href="Categorias/Wallpapers.php">Ver mas >>>>>>>>>></a></p>
       </p>
  </div>

</div> <!--Columna 2 Emmedio-->

   <div class="columna3">
         <h2>Siguenos........</h2>
         <div align="center">
            <p><a href="http://www.facebook.com"><img src="Imagenes/Facebook.jpg" class="myimage"/></a></p>
         </div>
         <div align="center">
		     <a href="http://www.twitter.com"><img src="Imagenes/twitter.jpg" class="myimage"/></a>
		 </div>
      <div align="center">
           <p><a href="http://www.feedburner.com"><img src="Imagenes/Otra.jpg" class="myimage"/></a></p>
        <p>&nbsp;</p>
     </div>
      <div align="center"><a href="">
        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','196','height','167','src','Imagenes/AndroidAnimation','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','Imagenes/AndroidAnimation' ); //end AC code
        </script>
        <noscript>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="196" height="167">
          <param name="movie" value="Imagenes/AndroidAnimation.swf" />
          <param name="quality" value="high" />
          <embed src="Imagenes/AndroidAnimation.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="196" height="167"></embed>
        </object>
        </noscript>
      </a></div>
</div>  <!--Columna 3 lado Derecha-->


 
	  <div id="pie">

      Proyecto Negocios Web |  &copy; 2012 | Diseñado por Karen Flores, Benjamin Bardales , David Matamoros y Miguel Villalobos.<br/>
      Universidad Cat&oacute;lica de Honduras
     </div> <!--Pie de pagina-->
</body>
</html>
