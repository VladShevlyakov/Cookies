<?php 
   ob_start();
   ?>

<form  method="post">
    <label for="username">Логин</label>  
    <input type="text" id="username" name="username"/><br />
    <label for="password">Пароль</label>  
    <input type="password" id="password" name="password"/><br />
    <label for="email">Email</label>  
    <input type="email" id="email" name="email"/><br />
    <input type="submit" value="Отправить">
</form>

<?php
    // $login_user = "vlad.shew";
    // $pass_user = "qwerty";
    // $email_user = "vlad.shew12@gmail.com";
    
    session_start();
    if (isset($_POST["username"]) && isset($_POST["password"]) && $_POST["email"]) {
    
    $login = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    if ("vlad.shew" == $login && "qwerty" == $password && "vlad.shew12@gmail.com" == $email)
    {
        echo "Добро пожаловать! " . $login;
        echo '<form action="2.php" method="POST">
                <input type="submit" value="Выход">
                </form> ';
    }
    else
    {
        echo "Вы не зарегистрированы!";  
        ob_end_flush();
    }
    }
?>



