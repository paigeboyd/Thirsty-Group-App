<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php
$connection = mysql_connect('localhost', 'B00656422', '2PSfcXZS');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('B00656422');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>