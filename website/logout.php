<?php 
	session_StarT();
	unset($_SESSION['Teacher']);
	unset($_SESSION['student']); header("location:index.php");
?>