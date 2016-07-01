<?php
$sms="";
if(isset($_POST['submitted'])){
$username=mysqli_real_escape_string($dbc,trim($_POST['user']));
$pswd=SHA1($_POST['pass']);
if(empty($username) || empty($pswd)){
	$sms="Please fill requreid field";
}else{
	login($username,$pswd);
}
}
?>
<html>
<div style="color: red;"><?=$sms ; ?></div>
	<form method="post" id="form" action="">
		<div class="input">
			<label class="label">Username</label></br>
		<input type="text" name="user" class="user"></div>
		<div class="input">
		<label class="label">Password</label><br />
		<input type="password" name="pass" class="user"></div>
		<div class="input">
		<!--<button type="submit" name="submit" id="sub" class="btn btn-success">
		Login</button>!-->
		 <input type="submit" name="submitted" value="Login" />
		</div>
		
	</form>
</html>