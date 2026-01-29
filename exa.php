<!-- <?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pushkar";

$conn = mysqli_connect ($host,$user, $password,$dbname);

if($conn){
    // echo "Data base has been connected";
}else{
    die("connection failed");
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple HTML Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image:url(images.jpg);
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;

    }

    form {
      background: linear-gradient(135deg, #4f636af0, #232624);
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: white;
      width: 300px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    label {
      font-weight: bold;
      text-transform: uppercase;
      
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin: 8px 0 16px 0;
      font-weight: bold;
      border: 1px solid rgba(14, 14, 139, 0.73);
      border-radius: 5px;
      box-sizing: border-box;
      background: linear-gradient(135deg, #d6cfcf, #8f98a11d);
    }

    input[type="submit"] {
      width: 100%;
      background-color: white;
      color: black;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
 input[type="text"]:hover,input[type="password"]:hover{
    background-color: #beb0aa90;;

    }
    input[type="submit"]:hover {
      background-color: #24a806ff;
    }
  </style>
</head>
<body>
  <form method="POST" action="insertdata.php">
    <h2>Registration Form</h2>
    <label for="name">Full Name</label>
    <input type="text" id="name" name="username" placeholder="Enter your name" required>


    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <label for="Name">Mother Name</label>
    <input type="text" id="mother" name="mothername"placeholder="Enter your mother name" required>

    <label for="Name ">father Name</label>
    <input type="text" id="father" name="fathername"placeholder="Enter your father name" required>

    <input type="submit" value="Submit">
  </form>
</body>
</html>