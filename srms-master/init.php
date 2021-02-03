
<?php 

    $conn = mysqli_connect("localhost","root","admin", "srms");
//making connection
     if (!$conn)
         {
            die("Connection failed: " . mysqli_error($conn));
          }

//selecting database     	
      $db_selected = mysqli_select_db($conn,"srms");
      if(!$db_selected){
        die("Database Selection failed: " . mysqli_error($conn));
      }
  


?>
