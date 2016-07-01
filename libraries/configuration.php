<?php 
	session_start();
	$_SESSION['logged']=false;
	$host="localhost";
	$user = "root";
	$password = "";
	$db = "jobdb";
	$dbc = mysqli_connect($host,$user,$password,$db) or die ("Fail to connect " .mysqli_connect_error());
	require 'functions.php';
?>