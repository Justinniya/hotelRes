







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            background-image: url('img/BG.webp');
            background-size: cover;
            background-position: center;
            display: flex; /* Make the body a flex container */
            justify-content: center; /* Center children horizontally */
            align-items: center; /* Center children vertically */
            min-height: 100vh; /* Ensure the body takes at least the full viewport height */
        }
         .hero {
            width: 500px;
            height:auto;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;            
            backdrop-filter: blur(5px);
            margin: auto; /* Added to ensure any specific alignment */
        }
    </style>
</head>
<body> 
    <div class = "hero">
    <div class="container py-5">
        <h1 class="mb-4">Welcome to Our Hotel</h1>
        <h2>Update Profile</h2>
        <?php
         include "conn.php";

    $upd_id = $_GET['upd_id'];


    $get_data = mysqli_query($conn,"SELECT * FROM users WHERE id='$upd_id'");
    while($row = mysqli_fetch_object($get_data)){
        $idd = $row -> id;
        $name = $row -> fullname;
        $email = $row -> email;
        $passwords = $row -> password;

    
    }
    
    ?>
        <form action="process.php" method="post" class="mt-4">
        <input type="hidden" name="id" value="<?php echo $idd;?>">
            <div class="mb-3">
                <label for="checkin-date" class="form-label">Fullname :</label>
                <input type="text" id="up_name-date" name="up_name" class="form-control" required value="<?php echo $name;?>">
            </div>

            <div class="mb-3">
                <label for="checkout-date" class="form-label">Email :</label>
                <input type="email" id="up_email" name="up_email" class="form-control" required value="<?php echo $email;?>" required><br>
            </div>

            <div class="mb-3">
                <label for="checkout-date" class="form-label">Password :</label>
                <input type="password" id="up_pass" name="up_pass" class="form-control" required value="<?php echo $passwords;?>" required><br>
            </div>

            <button type="submit" class="btn btn-primary" name="update_account">Update</button>
        </form>
    </div>
    </div>
    <!-- Bootstrap 5 JS with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>