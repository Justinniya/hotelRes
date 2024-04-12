<?php

  include "conn.php";

  $del_id = $_GET['del_id'];

  $delete = mysqli_query($conn, "DELETE FROM profile WHERE id='$del_id'");


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

?>