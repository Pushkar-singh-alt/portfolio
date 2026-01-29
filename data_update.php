<?php
$conn = mysqli_connect('localhost', 'root', '', 'pushkar');

$sql = 'SELECT*FROM databs';
$check = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($check);
?>
<table border="5px solid black" width="60%">
    <tr>
    <th>id</th>
    <th>username</th>
    <th>mothername</th>
    <th>fathername</th>
    <th>password</th>

    
    <th colspan="2">Action</th>
    </tr>
<?php
if ($rowcount>0) { 
    while ($data=mysqli_fetch_assoc($check)) {
?>
    <tr>
        <td><?php echo $data['id']; ?> </td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['mothername']; ?></td>
        <td><?php echo $data['fathername']; ?></td>
        <td><?php echo $data['password']; ?></td>
        
        <td>
            <a href="update_form.php?id=<?php echo $data['id']; ?>&username=<?php echo ($data['username']); ?>$mothername=<?php echo($data['mothername']); ?>$fathername=<?php echo($data['fathername']); ?>&password=<?php echo ($data['password']); ?>">update</a>
        </td>
        <td> <a href="delete_data.php?id=<?php echo $data['id']; ?>" style="background: #ff0000ff;">Delete</a></td>
    </tr>
<?php
    }
} else {
    echo "no data found";
}
?>
</table>


<style>
    body {
    background: linear-gradient(135deg, #698938ff, #65a680ff);
    font-family: 'Poppins', sans-serif;
    color: #fff;
    margin: 0;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
}

table {
    border-collapse: collapse;
    width: 70%;
    height: 50%;
    background: #fff;
    color: #333;
    box-shadow: 0 8px 20px rgba(147, 5, 76, 0.3);
    border-radius: 12px;
    overflow: hidden;
    animation: fadeIn 0.8s ease;
    margin-top: 45px;
}

th {    
    background-color: #007bff;
    color: white;
    font-size: 18px;
    padding: 12px 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border:5px solid black;
}

td {
    padding: 12px 15px; 
    text-align: center;
    border-bottom: 1px solid #ddd;
    transition: all 0.3s ease;
    border:5px solid black;

}

tr:hover {
    background-color: #30d0257e;
    transform: scale(1.0.01);
    animation: step-end;
}

a {
    text-decoration: none;
    background: #007bff;
    color: white;
    padding: 6px 12px;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-weight: 500;
}

a:hover {
    background: #0056b3;
    box-shadow: 0 0 10px #007bff;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
</head>

<body>

</style>
