<?php
	$phone="";

	ob_start();
	session_start();
	if (!empty($_SESSION['phone'])) {
    $phone = $_SESSION['phone'];
	unset($_SESSION['phone']);
	} 
	
ob_end_flush();
?>


<form  method="post">
    <label for="name">Имя</label>  
    <input type="text" id="name" name="name"/><br />
    <label for="surname">Фамилия</label>  
    <input type="text" id="text" name="surname"/><br />
    <label for="phone">Телефон</label>  
    <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>"/><br />
</form>
<a href="1.php">Первая форма</a>
