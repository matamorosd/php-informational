 <?php 
include("ConexionBD.php");

if (isset($_POST['registrar'])){
	if(get_magic_quotes_gpc())	
			{
			 $usuario = $_POST['nombreusuario'];
			 $contraseña = $_POST['pass'];
			 $correo=$_POST['correo'];
			}
	 else 	
	 		{
 		$usuario= addslashes( $_POST['nombreusuario']); //para que capture lo simbolos
		$contraseña= addslashes( $_POST['pass']); 
		$correo=addslashes( $_POST['correo']); 
	  		}
	  
$consulta = ("select * from usuario where user = '$usuario'");  
$resultado = mysql_query($consulta) or die (mysql_error());





if ($usuario == "" or $contraseña == "" or $correo == "" or $_POST['pass2'] == "" or mysql_num_rows($resultado) > 0 or $_POST['pass2'] != $contraseña)
{
	if ($_POST['pass2'] != $contraseña)
		{
		echo'<script language="javascript">alert("Error... las contraseñas no coinciden");window.location.replace("Registro.php");</script>';
		}
	if (mysql_num_rows($resultado) > 0)
		{
		echo'<script language="javascript">alert("Nombre de usuario ya existente.");window.location.replace("Registro.php");</script>';
		}
	if ($usuario == "")
		{
		echo'<script language="javascript">alert("Ingrese el nombre del usuario.");window.location.replace("Registro.php");</script>';
		
		}
	if ($contraseña == "" or $_POST['pass2'] == "")
		{
		echo'<script language="javascript">alert("Ingrese y confirme su contraseña.");window.location.replace("Registro.php");</script>';
		}
	if ($correo == "")
		{
		echo'<script language="javascript">alert("Ingrese su correo electronico.");window.location.replace("Registro.php");</script>';
		}
	
}
else
{
mysql_select_db($database,$conection);
$maquery = "INSERT INTO usuario(user,pass,correo) VALUES('$usuario','$contraseña','$correo')";
$insert = mysql_query($maquery);
   echo'<script language="javascript">alert("Tu perfil ya fue creado,Inicia sesion.");window.location.replace("Registro.php");</script>';
}
}
?>