<?php
include 'conn.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT `username`, `password` FROM `databs` WHERE `username`='$user' AND `password`='$pass'";

    $check = mysqli_query($conn, $sql);

    if (!$check) {
        die("Query failed: " . mysqli_error($conn));
    } 

    $result = mysqli_fetch_assoc($check);

    if (mysqli_num_rows($check) > 0) {
        $user = $result['username'];

        session_start();
        $_SESSION["username"] = $user;

        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login_form.php");
        exit();
    }
}
?>
