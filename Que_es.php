<?php

include('Verifica.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Que es Android?</title>
<link rel="shortcut icon" href="http://img.xatakandroid.com/lp2/samsung-24-11-2011/images/favicon.ico" type="image/ico" />
<link href="Estilo.css" rel="stylesheet" type="text/css" />
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
   			
  </div>

</div> <!--Columna 1 lado Izquierdo-->


   <div class="columna2">

      <h2 align="justify">Que es Android?<img  class="myimage2" src="Imagenes/android-wallpapers-34.jpg"/></h2>

      <p align="justify">
	     Android  es un sistema operativo inicialmente pensado para teléfonos móviles, al igual  que iOS, Symbian y                 
		 Blackberry OS. Lo que lo hace diferente es que está basado  en Linux, <strong>un núcleo de sistema operativo libre,
		 gratuito y multiplataforma
	  </strong>. </p>
	  
      <p align="justify">
	  El sistema permite programar aplicaciones en una variación de Java llamada  Dalvik. El sistema operativo proporciona todas las      interfaces necesarias para  desarrollar aplicaciones que accedan a las funciones del teléfono (como el GPS, las llamadas, la      agenda, etc.) de una forma muy sencilla  en un lenguaje de programación muy conocido como es Java. <br />
      Esta sencillez, junto a la existencia de herramientas de programación  gratuitas, hacen que una de las cosas más importantes de      este sistema operativo  sea <strong>la cantidad de aplicaciones disponibles</strong>, que extienden  casi sin límites la        
     experiencia del usuario.</p>
	  
     <h2>Caracteristicas:</h2>
	 
<table bgcolor="#C5FEC6" align="center" border="1">
  <tr>
    <th width="98" scope="row"><strong>Diseño  de dispositivo</strong></th>
    <td width="407"><div align="justify">La  plataforma es adaptable a pantallas más grandes, VGA, biblioteca de gráficos  2D, biblioteca de gráficos 3D basada en las especificaciones de la OpenGL ES  2.0 y diseño de teléfonos tradicionales.</div></td>
    </tr>
  <tr>
    <th scope="row"><strong>Conectividad</strong></th>
    <td><div align="justify">Android  soporta las siguientes tecnologías de conectividad: <a href="http://es.wikipedia.org/wiki/GSM" title="GSM">GSM</a>/<a href="http://es.wikipedia.org/wiki/EDGE" title="EDGE">EDGE</a>, <a href="http://es.wikipedia.org/wiki/IDEN" title="IDEN">IDEN</a>, <a href="http://es.wikipedia.org/wiki/Acceso_m%C3%BAltiple_por_divisi%C3%B3n_de_c%C3%B3digo" title="Acceso múltiple por división de código">CDMA</a>, <a href="http://es.wikipedia.org/wiki/EV-DO" title="EV-DO">EV-DO</a>, <a href="http://es.wikipedia.org/wiki/UMTS" title="UMTS">UMTS</a>, <a href="http://es.wikipedia.org/wiki/Bluetooth" title="Bluetooth">Bluetooth</a>, <a href="http://es.wikipedia.org/wiki/Wi-Fi" title="Wi-Fi">Wi-Fi</a>, <a href="http://es.wikipedia.org/wiki/Long_Term_Evolution" title="Long Term Evolution">LTE</a> y <a href="http://es.wikipedia.org/wiki/WiMAX" title="WiMAX">WiMAX</a>.</div></td>
    </tr>
  <tr>
    <th scope="row"><strong>Navegador  web</strong></th>
    <td>El  navegador web incluido en Android está basado en el motor de renderizado de  código abierto <a href="http://es.wikipedia.org/wiki/WebKit" title="WebKit">WebKit</a>, emparejado con el motor JavaScript V8 de  Google Chrome. El navegador obtiene una puntuación de 93/100 en el test Acid3.</td>
    </tr>
  <tr>
    <th scope="row"><strong>Soporte  multimedia</strong></th>
    <td><div align="justify">Android  soporta los siguientes formatos multimedia: <a href="http://es.wikipedia.org/wiki/WebM" title="WebM">WebM</a>, <a href="http://es.wikipedia.org/wiki/H.263" title="H.263">H.263</a>, <a href="http://es.wikipedia.org/wiki/H.264" title="H.264">H.264</a> (en <a href="http://es.wikipedia.org/wiki/3GP" title="3GP">3GP</a> o <a href="http://es.wikipedia.org/wiki/MP4" title="MP4">MP4</a>), <a href="http://es.wikipedia.org/wiki/MPEG-4_Part_2" title="MPEG-4 Part 2">MPEG-4  SP</a>, <a href="http://es.wikipedia.org/w/index.php?title=Adaptive_multi-rate_compression&amp;action=edit&amp;redlink=1" title="Adaptive multi-rate compression (aún no redactado)">AMR</a>, <a href="http://es.wikipedia.org/w/index.php?title=AMR-WB&amp;action=edit&amp;redlink=1" title="AMR-WB (aún no redactado)">AMR-WB</a> (en un contenedor 3GP), <a href="http://es.wikipedia.org/wiki/Advanced_Audio_Coding" title="Advanced Audio Coding">AAC</a>, <a href="http://es.wikipedia.org/wiki/HE-AAC" title="HE-AAC">HE-AAC</a> (en contenedores MP4 o 3GP), <a href="http://es.wikipedia.org/wiki/MP3" title="MP3">MP3</a>, <a href="http://es.wikipedia.org/wiki/Musical_Instrument_Digital_Interface" title="Musical Instrument Digital Interface">MIDI</a>, <a href="http://es.wikipedia.org/wiki/Vorbis" title="Vorbis">Ogg Vorbis</a>, <a href="http://es.wikipedia.org/wiki/WAV" title="WAV">WAV</a>, <a href="http://es.wikipedia.org/wiki/JPEG" title="JPEG">JPEG</a>, <a href="http://es.wikipedia.org/wiki/Portable_Network_Graphics" title="Portable Network Graphics">PNG</a>, <a href="http://es.wikipedia.org/wiki/Graphics_Interchange_Format" title="Graphics Interchange Format">GIF</a> y <a href="http://es.wikipedia.org/w/index.php?title=BMP_file_format&amp;action=edit&amp;redlink=1" title="BMP file format (aún no redactado)">BMP</a>.<a href="http://es.wikipedia.org/wiki/Android#cite_note-mediaformats-64">65</a></div></td>
    </tr>
  <tr>
    <th scope="row"><strong>Soporte  para hardware adicional</strong></th>
    <td><div align="justify">Android  soporta cámaras de fotos, de vídeo, pantallas táctiles, GPS, acelerómetros,  giroscopios, magnetómetros, sensores de proximidad y de presión, termómetro,  aceleración 2D y 3D.</div></td>
  </tr>
  <tr>
    <th scope="row"><strong>Entorno  de desarrollo</strong></th>
    <td><div align="justify">Incluye  un emulador de dispositivos, herramientas para depuración de memoria y análisis  del rendimiento del software. El entorno de desarrollo integrado es Eclipse  (actualmente 3.4 o 3.5) usando el plugin de Herramientas de Desarrollo de  Android.</div></td>
  </tr>
  <tr>
    <th scope="row"><strong>Videollamada</strong></th>
    <td><div align="justify">Android  soporta videollamada a través de Google Talk desde su versión HoneyComb.</div></td>
  </tr>
  <tr>
    <th scope="row"><strong>Características  basadas en voz</strong></th>
    <td><div align="justify">La  búsqueda en Google a través de voz está disponible como &quot;Entrada de  Búsqueda&quot; desde la versión inicial del sistema.<a href="http://es.wikipedia.org/wiki/Android#cite_note-69"></a></div></td>
  </tr>
  <tr>
    <th scope="row"><strong>Tethering</strong></th>
    <td><div align="justify">Android  soporta tethering, que permite al teléfono ser usado como un punto de acceso  alámbrico o inalámbrico (todos los teléfonos desde la versión 2.2, no oficial  en teléfonos con versión 1.6 o superiores mediante aplicaciones disponibles en  el Android Market, por ejemplo PdaNet). Para permitir a un PC usar la conexión  3G del móvil android se podría requerir la instalación de software adicional.<a href="http://es.wikipedia.org/wiki/Android#cite_note-70"></a></div></td>
  </tr>
</table>
<p align="justify">Al final podemos resumir que Android es la forma de afrontar la telefonía  móvil por parte de Google, que entiende estos dispositivos como una forma de  estar conectado constantemente a Internet. Las aplicaciones de Google que  vienen preinstaladas en el teléfono, permiten acceder a los servicios de Google  de forma muy integrada, aparte de la aplicación Market que permite instalar  aplicaciones desarrolladas por terceros de una forma muy sencilla.<br />
Esperemos que esta sea una introducción adecuada a lo que es Android y que  no quede muy desfasada con el tiempo, debido a que los cambios en este sistema  operativo están siendo muy rápidos. Sin embargo, esperamos que <a href="Inicio.php">este pagina en general</a> sirva para  acercar a la gente a este estupendo sistema.</p>


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
      <div align="center"><a href=""><img src="Imagenes/tablet-pc-7-android-2-1-wifi-3g-2gb_vip.jpg" class="Anuncios"/></a></div>
</div> <!--Columna 3 lado Derecha-->
   
   

	  <div id="pie">

      Proyecto Negocios Web |  &copy; 2012 | Diseñado por Karen Flores, Benjamin Bardales , David Matamoros y Miguel Villalobos.<br/>
      Universidad Cat&oacute;lica de Honduras
     </div> <!--Pie de pagina-->
</body>
</html>
