<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            display: flex; /* Make the body a flex container */
            justify-content: center; /* Center children horizontally */
            align-items: center; /* Center children vertically */
            min-height: 100vh; /* Ensure the body takes at least the full viewport height */
        }
        
        .receipt-container{
         width: 500px;
            height: auto;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;            
            backdrop-filter: blur(5px);
            margin: auto; /* Added to ensure any specific alignment */
        }
        h1  {
            color: #007bff;
        }
        p{
            padding-top:30px;
            font-size:24px;
            color:white;
            font-weight: bold;
        }
        .cta-container {
            padding: 40px;
            text-align: center;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <h1>Booking Receipt</h1>
        <p>Congratulations! You have successfully booked a room at our hotel.</p>
        <p>Thank you for booking with us. We look forward to your stay!</p>
        <div class="cta-container">


    

        <form method="post" action="process.php">
        <button type="submit" name="logout" value="Logout">LOGOUT</button>
        </form>



    </div>
</body>
</html>