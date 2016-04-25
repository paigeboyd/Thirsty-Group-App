<?php
/*
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ./php/login.php");
exit(); }
?>
