<?php
include('ConexionBD.php');
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select user from usuario where user='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['user'];

if(!isset($login_session))
{
header("Location: Registro.php");
}
?>