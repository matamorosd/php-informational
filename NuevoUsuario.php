 <?php 
include("ConexionBD.php");

if (isset($_POST['registrar'])){
	if(get_magic_quotes_gpc())	
			{
			 $usuario = $_POST['nombreusuario'];
			 $contrase�a = $_POST['pass'];
			 $correo=$_POST['correo'];
			}
	 else 	
	 		{
 		$usuario= addslashes( $_POST['nombreusuario']); //para que capture lo simbolos
		$contrase�a= addslashes( $_POST['pass']); 
		$correo=addslashes( $_POST['correo']); 
	  		}
	  
$consulta = ("select * from usuario where user = '$usuario'");  
$resultado = mysql_query($consulta) or die (mysql_error());





if ($usuario == "" or $contrase�a == "" or $correo == "" or $_POST['pass2'] == "" or mysql_num_rows($resultado) > 0 or $_POST['pass2'] != $contrase�a)
{
	if ($_POST['pass2'] != $contrase�a)
		{
		echo'<script language="javascript">alert("Error... las contrase�as no coinciden");window.location.replace("Registro.php");</script>';
		}
	if (mysql_num_rows($resultado) > 0)
		{
		echo'<script language="javascript">alert("Nombre de usuario ya existente.");window.location.replace("Registro.php");</script>';
		}
	if ($usuario == "")
		{
		echo'<script language="javascript">alert("Ingrese el nombre del usuario.");window.location.replace("Registro.php");</script>';
		
		}
	if ($contrase�a == "" or $_POST['pass2'] == "")
		{
		echo'<script language="javascript">alert("Ingrese y confirme su contrase�a.");window.location.replace("Registro.php");</script>';
		}
	if ($correo == "")
		{
		echo'<script language="javascript">alert("Ingrese su correo electronico.");window.location.replace("Registro.php");</script>';
		}
	
}
else
{
mysql_select_db($database,$conection);
$maquery = "INSERT INTO usuario(user,pass,correo) VALUES('$usuario','$contrase�a','$correo')";
$insert = mysql_query($maquery);
   echo'<script language="javascript">alert("Tu perfil ya fue creado,Inicia sesion.");window.location.replace("Registro.php");</script>';
}
}
?>