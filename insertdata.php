<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pushkar";

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_REQUEST["username"] ?? '';
$password = $_REQUEST["password"] ?? '';
$fathername = $_REQUEST["fathername"] ?? '';
$mothername = $_REQUEST["mothername"]?? '';

$sql = "INSERT INTO `databs`(`username`, `password`, `fathername`, `mothername`) 
        VALUES ('$user', '$password', '$fathername', '$mothername')";

$check = mysqli_query($conn, $sql);

if($check){
    echo "✅ Data Inserted Successfully";
}else{
    echo "❌ Data Insertion Failed: " . mysqli_error($conn);
}
?>
