<?php
include 'conn.php';

if (isset($_POST['login'])) {

    $_user = mysqli_real_escape_string($conn, $_POST['username']);
    
    $_password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT username, password FROM databs WHERE username = '$_user' AND password = '$_password'";

    $check = mysqli_query($conn, $sql);

    if (mysqli_num_rows($check) > 0) {
        echo "login sucess";
    } else {
        echo "incorrect data";
    }
}
?>
