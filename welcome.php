<?php

        session_start();
        $user = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white;">welcome <?php echo $user; ?></a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      <button class="btn btn-outline-success bg-danger"type="logout"><a href="logout.php">logout</a></button>
    </form>
  </div>
</nav>
</body>
</html>