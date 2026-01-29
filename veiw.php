<?php
$conn = mysqli_connect('localhost','root','','pushkar',);

$sql = "SELECT * FROM databs";
$check = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($check);

if ($rowcount > 0) {
    while ($data = mysqli_fetch_assoc($check)) {
        echo $data['id']."<br>";
        echo $data["username"]."<br>";
        echo $data["password"]."<br>";
        echo $data["fathername"]."<br>";
        echo $data["mothername"]."<br>";
    }
} else {
    echo "No data found";
}
?>
