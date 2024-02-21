<?php 
    session_start();
    if (isset($_SESSION['visited'])) {
    $_SESSION['visited'][] = basename(__FILE__);
    } else
    {
        $_SESSION['visited']=array();
    }
?>
    <h1>1 страница</h1>

    <a href="2.php">2 страница</a><br>
    <a href="3.php">3 страница</a><br>
    <a href="4.php">4 страница</a><br>
    <a href="5.php">результаты</a>


