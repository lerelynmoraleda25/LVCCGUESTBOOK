<!-- 

// 	$con = mysql_connect("localhost","root");
// 	$result = mysql_select_db("message_db");

// 	 $name = $_POST['name'];
// 	 $email = $_POST['email'];
// 	 $message = $_POST['message'];

// 	 mysql_query ("INSERT msgs SET name = '".$name."', message ='".$message."', email='".$email."'") -->

<?php 
	include "utilities.php";
	
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$action = 'N';

		post_message($name,$email,$message,$action);
		header("location:showmess.php");
	}else{
		header("location:home.php");
	}
	
?>
<!-- // <br><br> <a href = "showmess.php">view</a> -->