<?php
include("ConexionBD.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Usuario y Contraseña enviado desde el form

	$miusuario=addslashes($_POST['usuario']); 
	$micontraseña=addslashes($_POST['contra']); 
	
	
	$sql="SELECT id FROM usuario WHERE user='$miusuario' and pass='$micontraseña'";
	$result= mysql_query($sql);
	$row= mysql_fetch_array($result);
	$active=$row['active'];
	
	$count= mysql_num_rows($result);



	if($count==1)
	{
	if ($miusuario == "administrador" and $micontraseña=="contradmin"){
	    session_register("miusuario");
		$_SESSION['login_user']=$miusuario;

		header("location:InicioAdministrador.php");}
		
	else{
		session_register("miusuario");
		$_SESSION['login_user']=$miusuario;

		header("location: Inicio.php");
		
		}
		
	}
		else 
		{
		   
		   //echo'<script language="javascript">alert("Usuario o Contraseña son Invalidos");window.history.back();</script>';
		   echo '<script language="javascript">alert("Usuario o Contraseña son Invalidos");window.back();</script>';
		}
}
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
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;   
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>


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
    
     <p>&nbsp;</p>
     <p>
       <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','211','height','189','src','Imagenes/PlanetaAndroid','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','Imagenes/PlanetaAndroid' ); //end AC code
       </script>
       <noscript>
       <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="211" height="189">
         <param name="movie" value="Imagenes/PlanetaAndroid.swf" />
         <param name="quality" value="high" />
         <embed src="Imagenes/PlanetaAndroid.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="211" height="189"></embed>
       </object>
       </noscript>
     </p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
</div> <!--Columna 1 lado Izquierdo-->
 <!--REGISTRO DE USUARIO-->
   <div class="columna2">
   
   <form  action="NuevoUsuario.php" method="post" name="registro">
   <fieldset>
   <legend><h2>UNETE A LA COMUNIDAD!</h2></legend>
   <table>
   <tr>
   	  <td><p>Usuario:</p></td> <td><input type="text" name = "nombreusuario" /></td>
   </tr>
   <tr>
      <td><p>Contraseña:</p></td> <td><input type="password" name = "pass" /> </td>
   </tr>
   <tr>
      <td><p>Confirmar Contraseña:</p></td> <td><input type="password" name = "pass2" /></td>
   </tr>
   <tr>
      <td><p>Correo:</p></td> <td><input type="text" name = "correo" /></td>
   </tr>
   <tr><td></td><td><input type="submit" value="Registrar" name="registrar" /></td></tr>
   </table>
   </fieldset>
   </form>
   
 <!--INICIO DE SESION-->
</div> <!--Columna 2 Enmedio-->

  <div class="columna3">

     <div align="center" class="columna3"> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" name="ingresar">
      <fieldset> 
          <legend><H2>INGRESA!</H2></legend>
          <p>Usuario:<input type="text" name="usuario"/> <br>
          Contraseña:<input type="password" name="contra"/> <br><br>
          <input type="submit" name="ingresar" value="Ingresar"/>
          </p>
      </fieldset>
    </form></div>
    
      </div>  <!--Columna 3 lado Derecha-->

	  <div id="pie">

      Proyecto Negocios Web |  &copy; 2012 | Diseñado por Karen Flores, Benjamin Bardales , David Matamoros y Miguel Villalobos.<br/>
      Universidad Cat&oacute;lica de Honduras
     </div> <!--Pie de pagina-->
     
     
</body>
    </html>