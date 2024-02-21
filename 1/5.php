<?php
session_start();
?>

<h1>Результаты</h1>
<?php

    if (isset($_SESSION['visited']))
    {
        foreach($_SESSION['visited'] as $i)
        {
            echo $i. '<br>';
        }
        unset($_SESSION['visited']);
    }
?>

    <a href="1.php">На начало</a><br>
