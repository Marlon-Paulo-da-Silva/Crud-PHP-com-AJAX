<?php
  include 'connect.php';


  echo "///iniciou a inserção";

  if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['phoneSend']) && isset($_POST['addressSend'])){

    $nameSend = $_POST['nameSend'];
		$emailSend = $_POST['emailSend'];
		$phoneSend = $_POST['phoneSend'];
		$addressSend = $_POST['addressSend'];

    $sql = "INSERT INTO `crud` (name, phone, address, email) VALUES ('$nameSend','$phoneSend','$addressSend','$emailSend')";

    $result = mysqli_query($con, $sql);
    echo "///passou pela gravação dos dados";
  }else{
    echo "///não gravou os dados";
  }

?>