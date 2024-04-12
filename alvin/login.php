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
            width: 400px;
            height: 400px;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;            
            backdrop-filter: blur(2px);
            margin: auto; /* Added to ensure any specific alignment */
        }
        label {
      font-weight: 500;
      color:white;
    }

     input[type="text"],
    input[type="email"],
   
    input[type="password"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    button {
        background-color:white;
            border: 2px solid;
            color:black;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bolder;
            transition-duration: 0.4s;
            border-radius: 12px white;
             -webkit-box-shadow: 0 0 10px #fff;
               box-shadow: 0 0 10px #fff;

    }
    button:hover {
        background-color: white;
            color: #152345;
    }

    </style>
</head>
<body>
   
 
 <div class = "hero">
 <!-- Login Form -->
 <h2>Login</h2>
        <form action="process.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" id="email" name="login_email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="login_password" class="form-control" required>
            </div>

            
        
       <p> Don't have an account yet?<a href="register.php">Sign in here</a></p> 
       <p>Log in as Admin<a href="admin/index.php">Click Here</a></p> 

       <button type="submit" class="btn btn-primary" name ="login">Login</button>
       </form>
        </div>
        </div>
         <!-- Bootstrap 5 JS with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>