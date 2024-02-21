<?php
   	ob_start();
	session_start();

	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$_SESSION["phone"] = $_POST["phone"];
		//header("Location: 2.php");
		//exit;
	}
?>

<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="phone">Телефон</label>  
    <input type="tel" id="phone" name="phone"/><br /> <br />
    <input type="submit" value="Отправить">
</form>

<a href="2.php">Вторая форма</a>