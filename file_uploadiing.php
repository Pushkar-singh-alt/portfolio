<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uploading</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
            border: dotted;
        }

        input[type="file"] {
            display: block;
            margin: 15px auto;
            padding: 10px;
            border-radius: 10px;
            border: dotted;
            width: 250px;
            background-color: #f0f8ff;
            cursor: pointer;
            transition: 0.3s;
        }


        input[type="submit"] {
            background: #4a90e2;
            color: #fff; 
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #357ABD;
        }
    </style>
</head>
<body>
    <form action="file_processing.php" method="post" enctype="multipart/form-data">
        <h2>Upload Your File</h2>
        <input type="file" name="myfile">
        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>
