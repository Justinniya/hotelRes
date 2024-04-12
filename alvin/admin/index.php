<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
         .hero {
            width: 500px;
            height: 400px;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;            
            backdrop-filter: blur(5px);
            margin: auto; /* Added to ensure any specific alignment */
        }
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #fff;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #03C988;
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #029d70;
        }

    </style>
</head>
<body>
<div class="hero">
        <h1>Login Page for Admin</h1>

        <form action="adminprocess.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" required placeholder="Email here...">

            <label>Password</label>
            <input type="password" name="pass" required placeholder="Password here...">

            <input type="submit" name="admin_login" value="LOGIN">
        </form>
        <p>Log in as user<a href="index.php">Click Here</a></p> 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>