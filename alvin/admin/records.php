<?php
    include "../conn.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECORDS</title>
</head>
<style>
     body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            display: flex; 
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
        }
         .hero {
            width: 550px;
            height: auto;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;            
            backdrop-filter: blur(5px);
            margin: auto; /
        }
        button {
            margin-top:10px;
            display: inline-block;
            padding: 10px 10px;
            font-size: 20px;
            background-color: transparent;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
</style>
<body>
    <div class = "hero">
    <H1>LIST OF RECORDS</H1>
<a href="index.php">ADD PROFILE</a>
    <a href="records.php">VIEW RECORDS</a>
    <table  border = "2px solid">
        <tr>
            <th>ID</th>
            <th>FULLNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION 1</th>
            
        </tr>
        <?php

        $records = mysqli_query($conn, "SELECT * FROM users");
        while($get_records = mysqli_fetch_array($records)){

            ?>

            <tr>
                <td><?php echo $get_records['id'];?> </td>
                <td><?php echo $get_records['fullname'];?> </td>
                <td><?php echo $get_records['email'];?> </td>
                <td><?php echo $get_records['passwordd'];?> </td>
                <td> <a href="delete.php?del_id=<?php echo $get_records['id'];?>">DELETE </a> </td>
            
            </tr>
           <?php
        }
        ?>
    </table>
    <form method="post" action="adminprocess.php">
    <button type="submit" name="logout" value="Logout">LOGOUT</button>
</form>

        


    </div>
</body>
</html>