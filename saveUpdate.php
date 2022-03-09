<?php
    //update query

    if(isset($_POST['hiddendata']) ){
    
      $uniqueid = $_POST['hiddendata'];
      $name = $_POST['updatename'];
      $email = $_POST['updateemail'];
      $phone = $_POST['updatephone'];
      $address = $_POST['updateaddress'];
  
      $sql = "update `crud` set name='$name', email='$email', phone='$phone', adress='$address' where id=$uniqueid";
  
      $result = mysqli_query($con, $sql);
  
      echo '<script>console.log("tem hiddendata")</script>';
    }
?>