<?php 
   ob_start();
?>

<form  method="post">
    <label for="username">Дата рождения</label>  
    <input type="date" id="birthday" name="birthday"/><br />
    <input type="submit" value="Отправить">

</form>

<?php 
	session_start();
	if (isset($_POST["birthday"])){
		$today = new DateTime();
		$birth = ($_POST["birthday"]);
		$birthday= DateTime::createFromFormat('Y-m-d',date('Y'). '-' . substr($birth,5));
		if ($today > $birthday){
			$daybirth->modify('+1 year');
		}
		//echo $birth;
		$interval = $today->diff($birthday);
		$daysLeft = $interval->days;
		echo "До вашего дня рождения осталось: " . $daysLeft . " day(s)";
	}
	ob_end_flush();
?>