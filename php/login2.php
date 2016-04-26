<?php 

session_start();
    
    if (!isset($_SESSION['login'])){
        
        
        $username= $_POST['username'];
        $_SESSION['username']= $username;
    }
echo "Welcome " . $_SESSION['username'] . "<br><br>";



$conn = mysqli_connect("localhost", "B00656422", "2PSfcXZS")
    or die("Could not connect: " . mysqli_error($conn));
print "Successful Connection";

mysqli_select_db($conn, 'B00656422') or die ('db will not open');
print "Database Connected <br> ";

echo "<br> <br> <a href='../index2.php'> Order Now! </a> <br><br>";

mysqli_close($conn);

?>