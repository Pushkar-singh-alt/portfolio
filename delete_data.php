<?php
$conn = mysqli_connect('localhost', 'root', '', 'pushkar');
$id =$_REQUEST['id'];
$sql = "DELETE FROM databs WHERE id='$id'";
$check = mysqli_query($conn,$sql);
if($check){
    echo "Data delete";
    header("location:data_update.php");
}
?>