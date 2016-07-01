<?php
$sms="";
if(isset($_POST['submit'])){
	$fname=mysqli_real_escape_string($dbc,trim($_POST['fname']));
	$sname=mysqli_real_escape_string($dbc,trim($_POST['sname']));
	$email=mysqli_real_escape_string($dbc,trim($_POST['email']));
	$pswd=SHA1($_POST['pswd']);
	
	if(empty($fname) ||empty($sname) || empty($email) ||empty($pswd)){
		$sms="Fill all fields";
	}else{
		$string="INSERT INTO users(fname,sname,email,password) VALUES ('$fname','$sname','$email','$pswd')";
		$query=mysqli_query($dbc,$string) or die(mysqli_error($dbc));	
		$sms="successfuly regisered";
		header('location: index.php?d=login');
		
	}
}
	
?> 
	<div style="color: green;"><?=$sms ; ?></div>
	<form method="post" id="form" action=""  name="registry_form"onsubmit="return validate()" >
		<div style="text-align:center"><span class="span"><b>Create new account</b></span></div>
		<div class="input">
		<label class="label">First name</label></br>
		<input type="text" name="fname" class="user" required></div>
		<div class="input">
		<label class="label">Surname</label></br>
		<input type="text" name="sname" class="user" required></div>
		<div class="input">
		<label class="label">Email</label></br>
		<input type="email" name="email" class="user" required></div>
		<div class="input">
		<label class="label">Password</label></br>
		<input type="password" name="pswd" class="user" required> </div>
		<div class="input">
		<label class="label">Confirm Password</label><br />
		<input type="password" name="pswd2" class="user" required> </div>
		<div class="input">
		<button type="submit" name="submit" id="sub" class="btn btn-success">signUp<button></div>
	</form>