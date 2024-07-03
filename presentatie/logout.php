<?php
session_start();
//checkt of de value gezet is dan zet die hem uit
if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}
//brengt je naar de login pagina
header("Location: login.php");
die;
?>