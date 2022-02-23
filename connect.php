<?php
 echo "iniciou conexão";
  $con = new mysqli('localhost','root','','crudajax');

  if($con){
    echo "Conectado com sucesso";
  }else{
    die(mysqli_error($con));
  }
?>