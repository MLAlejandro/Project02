<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_REQUEST['submit'])) {
if (empty($_REQUEST['user']) || empty($_REQUEST['pass'])) {
$error = "El nombre o la contraseña es erroneo";
} else {
// Define $username and $password
$username=$_REQUEST['user'];
$password=$_REQUEST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_reserva');

$sql = "SELECT * FROM tbl_usuaris WHERE email_usuari = '$username' AND pass_usuari = '$password'";
$datos = mysqli_query($con, $sql);
// echo $sql;
if (mysqli_num_rows($datos) == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("Location: form.php"); // Redirecting To Other Page
} else {
$error = "Nombre o contraseña erronea";
} mysqli_close($con); // Closing Connection
}
}
?>