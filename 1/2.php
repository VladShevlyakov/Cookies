<?php 
    session_start();
    $_SESSION['visited'][] = basename(__FILE__);
?>
    <h1>2 страница</h1>

    <a href="1.php">1 страница</a><br>
    <a href="3.php">3 страница</a><br>
    <a href="4.php">4 страница</a><br>
    <a href="5.php">результаты</a>


