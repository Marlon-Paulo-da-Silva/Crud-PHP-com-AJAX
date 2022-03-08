<?php
  include 'connect.php';

  if(isset($_POST['updateid'])  ){
    $user_id = $_POST['updateid'];

    $sql = "select * from `crud` where id=$user_id";
    $result = mysqli_query($con, $sql);

    $response = array();

    while($row = mysqli_fetch_assoc($result)){
      $response = $row;
    }

    echo json_encode($response);
  }

  //update query

  if(isset($_POST['hiddendata']) ){
    $uniqueid = $_POST['hiddendata'];
    $name = $_POST['updatename'];
    $email = $_POST['updateemail'];
    $phone = $_POST['updatephone'];
    $address = $_POST['updateaddress'];

    $sql = "update `crud` set name='$name', email='$email', phone='$phone', adress='$address' where Id=$uniqueid";

    $result = mysqli_query($con, $sql);

    echo 'tem hiddendata';
  }
  
?>