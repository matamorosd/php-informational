<?php

include('Verifica.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ayuda</title>
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

           <h2>Ayuda</h2>
             <div align="center" ><img src="Imagenes/Preguntas.jpg" width="217" height="281"/>
               </div>
             <p>
             Con esta seccion de Planeta Android queremos crear un canal para mejorar la comunicación entre todo eyl mundo.<br />
             Puedes preguntar cualquier duda que tengas y que, al ser respondida, la solución ayude a otras personas.</p>
           <p>Así que participa, pregunta y forma parte de esta gran comunidad.<br />
           <br />
              Un saludo a todos,<br />		
              Planeta Android</p>
  
         <form> 
            <fieldset>
            <legend>
                 <h2>Haz tu Pregunta</h2> 
                 </legend>

   	         <label>Título :</label>
 	              <input name="titulo" type="text" />
   		     <br />
   	         <label>Selecciona una Categoría :</label>
         <ul>
             <li>
                <input type="radio" value="herramientas" name="categoria" />
                Herramientas
			</li>
            <li>
                <input type="radio" value="juegos" name="categoria" />
                Juegos
			</li>
            <li>
               <input type="radio" value="medicina" name="categoria" />
                Medicina
			</li>
            <li>
               <input type="radio" value="salud y bienestar" name="categoria" />
                Salud y Bienestar</li>
            <li>
                <input type="radio" value="multimedia" name="categoria" />
                Multimedia  </li>
         </ul>
 
   
      <label>Descripción :</label>
      <br />
    <textarea id="Descripcion" name="Descripcion" cols="40" rows="5"> 
      </textarea>
      <br />
      <br />
   
     <label>Email</label>
    <input type="text" name="correo" id="correo" value="" size=    "30" />

      <br />
      <br />
      <input type="submit" value="Enviar" name="enviar"  />

      </fieldset>
         </form>
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
