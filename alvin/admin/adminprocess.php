<?php   
    include "../conn.php";
    session_start();

//this code is for admin login
if(isset($_POST['admin_login'])){

    $email = $_POST['email'];

    $pass = $_POST['pass'];

        
    $checkadmin=mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$pass' ");

    $num = mysqli_num_rows($checkadmin);

        if($num >=1){
            $_SESSION['email']=$email;
            ?>
            <script> 
                alert("Welcome Admin!");
                window.location.href="records.php";
            </script>
            <?php
        }else{

            ?>
            <script> 
                alert("Error in Email or Password!");
                window.location.href="index.php";
            </script>
            <?php

        }




}

if(isset($_POST['update_account'])){
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $upd_id = $_GET['id'];
        $fullname= $_POST['fullname'];
        $email= $_POST['email'];
        $password= $_POST['password'];

        $updateaccount=mysqli_query($conn, "UPDATE users SET fullname='$fullname', email='$email', passwordd='$password' WHERE id='$upd_id'");

        if($updateaccount){
            ?>
            <script>
                alert("Data was Changed!");
                window.location.href="userhome.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Failed to update data!");
                window.location.href="update_profile.php?id=<?php echo $upd_id; ?>";
            </script>
            <?php
        }
    } else {
        echo "No id provided";
    }
}

if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];

    $delete = mysqli_query($conn, "DELETE FROM users WHERE id='$del_id'");
  
  
    if($delete == true){
  
        ?>
        <script>
            alert("data is deleted!");
            window.location.href="records.php";
        </script>
        
        <?php
    } else {
      ?>
      <script>
          alert("no data is deleted!");
          window.location.href="records.php";
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






?>
