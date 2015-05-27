<?php
/*
// establishing the MySQLi connection

 

$con = mysqli_connect(“localhost”,”root”,””,”gimdal”);



// checking the user

if(isset($_POST[‘login’])){

$email = mysqli_real_escape_string($con,$_POST[‘email’]);

$password = mysqli_real_escape_string($con,$_POST[‘password’]);

$sel_user = “select * from usuaris where email=’$email’ AND password=’$password'”;

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION[‘user_email’]=$email;

echo “<script>window.open(‘home.php’,’_self’)</script>”;

}

else {

echo “<script>alert(‘Email or password is not correct, try again!’)</script>”;

}

}

?>
*/
<?php
session_start();
if(isset($SESSION))
header("Cache-control: private");
require_once("conexion.php");
$sql = "select * from usuarios where usuario = '". mysql_real_escape_string ($_POST['usuario'])."' and password = '".mysql_real_escape_string ($_POST['password'])."' limit 1";
$resultado = mysql_query($sql) or die (mysql_error());
$data = mysql_fetch_array($resultado);
if($data==0) { header('Location: ../based/loginweb.php?error=si'); }
else { header('Location: ../php/redir.php');}
?>