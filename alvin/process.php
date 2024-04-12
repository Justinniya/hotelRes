<?php
include "conn.php";
session_start();

    // this code is for registration
    if(isset($_POST['reg'])){

      $fullname=$_POST['fullname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
     

      $insertusers = mysqli_query($conn, "INSERT INTO users (id, fullname, email, password) VALUES (NULL, '$fullname', '$email', '$password')");

      if ($insertusers == true) {
          ?>
          <script>
              alert("Your Registration was Successful!");
              window.location.href = "login.php";
          </script>
          <?php
      } else {
          ?>
          <script>
              alert("Error Registration\nTry Again!");
              window.location.href = "reg.php";
          </script>
          <?php
      }
    }

       // this code is for registration

    if(isset($_POST['login'])){
        
        $email=$_POST['login_email'];
        $password=$_POST['login_password'];


        $check=mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND passwordd='$password' ");

          $num=mysqli_num_rows($check);
          
        

        if($num >=1 ){
            while($row = mysqli_fetch_object($check)){
                $idd = $row -> id;
            }
            echo $idd;
            $_SESSION['email']=$email;
            ?>
            <script>
                alert("Account Accepted! Welcome Users!");
                window.location.href="book.php?upd_id=<?php echo $idd;?>";
            </script>
            <?php

        }else{
            ?>
            <script>
                alert("Email or Password not Found!");
                window.location.href="register.php";
            </script>
            <?php

     }
    }








// This code is for booking creation
if(isset($_POST['submit'])){
    // Validate and sanitize user input
    $checkinDate = $_POST['checkin_date'];
    $checkoutDate = $_POST['checkout_date'];
    $guests = $_POST['guests'];
    $roomType = $_POST['room_type'];

    if ($checkinDate < date('Y-m-d') || $checkoutDate <= $checkinDate) {
        echo "Invalid date selection.";
        exit;
    }    
    
    $bookings=mysqli_query($conn, "INSERT INTO bookings  VALUES('$checkinDate','$checkoutDate','$guests','$roomType')");

    if($bookings==true){
        ?>
        <script>
            alert("Your Booking was Successful!");
            window.location.href="result.php";
        </script>
        <?php
        
    }else{
        ?>
        <script>
            alert("Try Again!");
            window.location.href="reg.php";
        </script>
        <?php

    }

}

if(isset($_POST['update_account'])){
    $id = $_POST['id']; 
    $fullname = $_POST['up_name'];
    $email = $_POST['up_email'];
    $pass = $_POST['up_pass'];
    
    $update_query = mysqli_query($conn, "UPDATE users SET fullname='$fullname', email='$email', password='$pass' WHERE id='$id'");

    if($update_query){
        ?>
        <script>
            alert("updated succesfully");
            window.location.href="book.php"; 
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Error updating profile!");
            window.location.href="update_profile.php"; 
        </script>
        <?php
    }
}

if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other desired page
    header("Location: index.php");
    exit();
}

else{
    echo $id;
}
?>

