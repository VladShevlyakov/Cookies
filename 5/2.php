<?php 
	session_start();
    $_SESSION['count_view']=-1;
	header('Location: 1.php');
	exit();
?>