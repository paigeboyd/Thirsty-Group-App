<?php
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
		$email = $_POST['email'];
        $password = $_POST['password'];
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='../login.html'>Login</a></div>";
        }
    }else{}
?>
