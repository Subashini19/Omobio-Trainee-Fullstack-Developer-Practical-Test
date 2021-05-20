<?php
	include_once 'config.php';
?>

<?php

	$username =$_POST['userName'];
	$name =$_POST['name'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	
	$query="INSERT INTO user(id,username,email ,name,password) VALUES ('','$username','$email','$name','$password')";
	
	if(mysqli_query($conn,$query)){
		$msg= "Record inserted successfully!!!";
		
	}else{
		$msg = "Error in inserting records";
	}
	
	$response[]= array("message"=>$msg);
	echo json_encode($response);
?>