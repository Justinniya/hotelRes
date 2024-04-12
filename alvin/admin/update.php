<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <a href="records.php">Back to Records</a>

    <h1> Update profile</h1>
    <?php
    include "../conn.php";

    if (isset($_GET['id'])) {
        $upd_id = $_GET['id'];

        $get_data = mysqli_query($conn, "SELECT * FROM users WHERE id='$upd_id'");
        if (mysqli_num_rows($get_data) > 0) {
            $row = mysqli_fetch_assoc($get_data);
            $fullname = $row['fullname'];
            $email = $row['email'];
            $password = $row['password'];
        } else {
            echo "No user found with ID $upd_id.";
            exit;
        }
    } else {
        echo "No user ID provided.";
        exit;
    }
    ?>

    <form action="adminprocess.php?id=<?php echo $upd_id; ?>" method="POST">
        <label for="upfullname">Fullname:</label><br>
        <input type="text" id="upfullname" name="fullname" required value="<?php echo $fullname; ?>"><br><br>

        <label for="upemail">Email:</label><br>
        <input type="email" id="upemail" name="email" required value="<?php echo $email; ?>"><br><br>

        <label for="uppassword">Password:</label><br>
        <input type="password" id="uppassword" name="password" required value="<?php echo $password; ?>"><br><br>

        <input type="submit" name="update_account" value="UPDATE">
    </form>
    
</body>
</html>