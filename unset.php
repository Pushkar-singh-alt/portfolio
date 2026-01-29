<?php
session_start();
$_SESSION["name"] = "pushkar singh";
echo $_SESSION['name'];
session_unset();
echo $_SESSION['name'];
?>