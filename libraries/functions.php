<?php
	function login($user,$pswd){
		global $dbc;
	$q="SELECT fname,email FROM users WHERE email='".mysqli_real_escape_string($dbc,$user)."' AND password='".mysqli_real_escape_string($dbc,$pswd)."' ";
	$r = mysqli_query($dbc,$q) or die(mysqli_error()); 
	$nrows=mysqli_num_rows($r);
	
	if($nrows>0){
		while($row=mysqli_fetch_assoc($r))
			$_SESSION['email']= $row['email'];
			$_SESSION['fname']= $row['fname'];
			
			
			//$url = "includes/template.php";
			header('location:index.php?id=checked');
			//header('location:'.$url);
	}else{
		echo "<p style='color:red;'>Incorrect Username or Password.</p>";
	}
	}
	
	function logout(){
		$_SESSION = array();
		unset($_SESSION['email']);
		unset($_SESSION['fname']);
		session_destroy();
		header('location:index.php');
	}
?>