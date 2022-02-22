<?php
  include 'connect.php';

  extract($_POST);

  if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['addressSend'])){
    $sql = "insert into `crud` (name, email, phone, address) values (`$nameSend`,`$emailSend`,`$phoneSend`,`$addressSend`)";

    $result = mysqli_query($con, $sql);
  }

?>