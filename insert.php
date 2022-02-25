<?php
  include 'connect.php';

  if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['phoneSend']) && isset($_POST['addressSend'])){

    $nameSend = $_POST['nameSend'];
		$emailSend = $_POST['emailSend'];
		$phoneSend = $_POST['phoneSend'];
		$addressSend = $_POST['addressSend'];

    $sql = "INSERT INTO `crud` (name, phone, address, email) VALUES ('$nameSend','$phoneSend','$addressSend','$emailSend')";

    $result = mysqli_query($con, $sql);
  }

?>