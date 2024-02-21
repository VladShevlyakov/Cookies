<form  method="post">
    <label for="username">Фамилия и Имя</label>  
    <input type="text" id="username" name="username" /><br />
    <input type="submit" value="Отправить">
</form>

<a href="2.php">2 страница</a><br>
<a href="3.php">3 страница</a><br>
<a href="4.php">4 страница</a><br>
<a href="5.php">5 страница</a><br>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST['username'])){
            session_start();
            $_SESSION['name'] = $_POST['username'];
            echo $_SESSION['name'];
        }
    }
    
?>
