    <?php
    $id = $_REQUEST['id'] ?? '';
    $username = $_REQUEST['username'] ?? '';
    $mothername = $_REQUEST['mothername'] ?? '';
    $fathername = $_REQUEST['fathername'] ?? '';
    $password = $_REQUEST['password'] ?? '';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Form</title>

<!-- 🌈 Stylish Glass Card CSS -->
<style>
body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    background: linear-gradient(135deg, #000428, #004e92);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.container {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 16px;
    padding: 40px;
    width: 380px;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
    animation: slideUp 0.9s ease;
}

h2 {
    text-align: center;
    font-size: 26px;
    margin-bottom: 25px;
    color: #00c3ff;
    text-shadow: 0 0 10px #00c3ff;
    letter-spacing: 1px;
}

.form-group {
    margin-bottom: 20px;
    position: relative;
}

label {
    display: block;
    margin-bottom: 6px;
    font-size: 15px;
    color: #d9e6ff;
    letter-spacing: 0.5px;
}

input {
    width: 80%;
    padding: 10px 12px 10px 38px;
    border: none;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
    font-size: 15px;
    outline: none;
    transition: 0.3s ease;
}

input:focus {
    background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 0 10px #00c3ff;
}

.icon {
    position: absolute;
    left: 10px;
    top: 35px;
    font-size: 18px;
    color: #00c3ff;
}

button {
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    background: linear-gradient(90deg, #007bff, #00c3ff);
    border: none;
    color: white;
    font-size: 17px;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover {
    background: linear-gradient(90deg, #00c3ff, #007bff);
    box-shadow: 0 0 15px #00c3ff;
    transform: scale(1.03);
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<div class="container">
<h2><i class="fa-solid fa-pen-to-square"></i> Update Details</h2>

    <form method="post" action="updateprocess.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="username">Full Name</label>
            <i class="fa-solid fa-user icon"></i>
            <input type="text" id="username" name="username"placeholder="Enter your username" value="<?php echo $username; ?>">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <i class="fa-solid fa-lock icon"></i>
            <input type="password" id="password" name="password"placeholder="Enter your password" value="<?php echo $password; ?>">
        </div>

        <div class="form-group">
            <label for="mothername">Mother Name</label>
            <i class="fa-solid fa-female icon"></i>
            <input type="text" id="mothername" name="mothername"placeholder="Enter your mother name" value="<?php echo $mothername; ?>">
        </div>

        <div class="form-group">
            <label for="fathername">Father Name</label>
            <i class="fa-solid fa-male icon"></i>
            <input type="text" id="fathername" name="fathername" placeholder="Enter your father name" value="<?php echo $fathername; ?>">
        </div>

        <button type="submit"><i class="fa-solid fa-rotate-right"></i> Update Data</button>
    </form>
</div>
</body>
</html>
