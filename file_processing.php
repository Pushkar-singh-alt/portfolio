<?php
$filename = $_FILES['myfile']['name'];
$tempname = $_FILES['myfile']['tmp_name'];

$destination = 'upload/'.$filename;
move_uploaded_file($tempname,$destination);

header("location: file_uploadiing.php" )
?>