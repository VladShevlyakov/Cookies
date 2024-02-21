<?php 
    setcookie ('counter', '', time() - 3600);
	header('Location: 1.php');
	exit();
?>