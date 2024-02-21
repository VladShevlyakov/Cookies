<?php
/*if (isset($_POST['reset_cookie'])) {
    setcookie('counter', '', time() - 3600, '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/') 
: setcookie('counter', 1, time() + 3600, '/');
echo isset($_COOKIE['counter']) ? "Вы посетили сайт: ".$_COOKIE['counter']. " раз(а)" : "Вы посетили сайт: ". 1 . "раз";*/
session_start();

if (!isset($_SESSION['count_view']))
{
    $_SESSION['count_view']=0;
    echo "Вы посетили сайт в первый раз";
}else
{
    $_SESSION['count_view']++;
    echo "Вы посетили сайт: ". $_SESSION['count_view'] . " раз(а)";
} 
?>

<form method="post" action="2.php">
    <button type="submit" name="reset_cookie" >Сброс счётчика</button>
</form>
