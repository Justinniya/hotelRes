<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        .whole{
            margin-bottom: 50%;
        }
        .bg{
            background-color: transparent;
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
    <div class="whole">
    <?php 
    include "conn.php";
    $upd_id = $_GET['upd_id'];
    $get_data = mysqli_query($conn,"SELECT * FROM users WHERE id='$upd_id'");
    while($row = mysqli_fetch_object($get_data)){
        $idd = $row -> id;

    }
    ?>
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-sidebar w3-bar-block w3-border-right bg" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="update.php?upd_id=<?php echo $idd;?>" class="w3-bar-item w3-button">Update</a>
  <form method="post" action="process.php">
        <button type="submit" name="logout" value="Logout">LOGOUT</button>
</form>
</div>
    </div>
    <div class = "hero">
    <div class="container py-5">
        
        <h1 class="mb-4">Welcome to Our Hotel</h1>
        <h2>Book Your Stay</h2>
        <form action="process.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="checkin-date" class="form-label">Check-In Date:</label>
                <input type="date" id="checkin-date" name="checkin_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="checkout-date" class="form-label">Check-Out Date:</label>
                <input type="date" id="checkout-date" name="checkout_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="guests" class="form-label">Number of Guests:</label>
                <select id="guests" name="guests" class="form-select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="room-type" class="form-label">Room Type:</label>
                <select id="room-type" name="room_type" class="form-select">
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="suite">Suite</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Book Now</button>
        </form>
    </div>
    </div>
    
    

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
    <!-- Bootstrap 5 JS with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>