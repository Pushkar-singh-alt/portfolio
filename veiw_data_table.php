<style>
    body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #6f8746d2, #0748a2ed);
        display:flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    table {
        border-collapse: collapse;
        border: 5px solid black;
        width: 50%;
        background-color: #a1a6acff;
        box-shadow: 0 0 15px rgba(27, 4, 203, 0.98);
        border-radius: 12px;
        overflow: hidden;
        animation: fadeIn 1s ease-in-out;
        border: 5px solid black;
    }

    th {
        background-color: #5563DE;
        color: white;
        text-transform: uppercase;
        padding: 14px;
        font-size: 16px;
        letter-spacing: 1px;
    }

    td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        font-size: 15px;
    }
    th:hover{
        background-color: #f15507ff;
        transition: all 0.1s ease-in-out;
        cursor: pointer;
    }

    tr:hover {
        background-color: #b3e09bff;
        transition: 0.3s;
    }

    tr:last-child td {
        border-bottom: none;
    }


    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body></body>

<table border="5px solid black">
    <tr>
        <th> ID </th>
        <th> username</th>
        <th> password</th>
        <th> mothername</th>
        <th> fathername</th>
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root','', 'pushkar',);
            $sql = "SELECT * FROM `databs`";
    $check = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($check);
    if ($rowcount > 0) {
        while($data = mysqli_fetch_assoc($check)) {
    ?>
    <tr>
        <td><?php echo $data['id'];?> </td>
        <td><?php echo $data['username'];?></td>
        <td><?php echo $data['password'];?></td>
        <td><?php echo $data['mothername'];?></td>
        <td><?php echo $data['fathername'];?></td>


    </tr>
    <?php
    }

    }else{
        echo'no data found';
    }?>

</table>