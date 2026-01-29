<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, rgba(0, 255, 149, 0.59), rgba(255, 0, 204, 0.37));
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      padding: 30px 40px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(167, 7, 7, 0.1);
      width: 300px;
    }

    h2{
      text-align: center;
      color: #333;
    }

    label {
      font-weight: bold;
      color: #333;
      display: block;
      margin-bottom: 5px;
    }

    input.form-c {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    input.form-c:focus {
      border-color: #007bff;
      outline: none;
    }

    input[type="submit"] {
      width: 105%;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <form action="sql_injection.php" method="post">
    <h2>Login</h2>

    <label for="username">Name:</label>
    <input type="text" class="form-c" id="username" name="username" placeholder="Enter your name" required>

    <label for="password">Password:</label>
    <input type="password" class="form-c" id="password" name="password" placeholder="Enter your password" required>

    <input type="submit" value="Login" name="login">
  </form>

</body>
</html>
