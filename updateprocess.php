<?php
$conn = mysqli_connect("localhost", "root", "", "pushkar");

$id = $_POST["id"] ?? '';
$username = $_POST['username'] ?? '';
$mothername = $_POST['mothername'] ?? '';
$fathername = $_POST['fathername'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "UPDATE `databs` SET `username`='$username',`mothername`='$mothername',`fathername`='$fathername',`password`='$password' WHERE `id`='$id'";
$check = mysqli_query($conn, $sql);

if ($check) {
    echo "✅ Data has been updated successfully!";
} else {
    echo "<p class='error'>❌ Error: " . mysqli_error($conn) . "</p>";
}
?>
