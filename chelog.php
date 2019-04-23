<?php
if( isset($_POST['username']) and isset($_POST['password']) ) {
		$dbhost="localhost";  // hostname
        $dbuser="root"; // mysql username
        $dbpass=""; // mysql password
        $db="nss"; // database you want to use
 
$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );
		$user=$_POST['username'];
		$pass=$_POST['password'];
        echo"$username , $password";
		$ret=mysqli_query( $conn, "SELECT * FROM registration WHERE username='$username' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			header("Location: loginpage.html");
			echo"entered";
		}
		else {
	        
			header('location: loginpage.html');
		}
}
?>
 

 