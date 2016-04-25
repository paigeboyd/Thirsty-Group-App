<?php
	
	session_start();

if (!isset($_SESSION['login'])){
        
        echo "Setting login session variable<br>";
        $username= $_POST[username];
        $_SESSION['login']= $username;
    }

echo "You are logged in as " . $_SESSION['login'] . "<br><br>";
echo "<a href='../index2.html'> Order Now...  </a><br>";
echo "<a href='logout.php'> Logout </a><br>";

$connection = mysql_connect('localhost', 'B00656422', '2PSfcXZS');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('B00656422');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		

        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
        
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: ../index2.html");
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='../login.html'>Login</a></div>";
				}
    }else{}

?>







