<?php
  $con = new mysqli('localhost','root','','crudajax');

  if($con){
    echo "Conectado";
  }else{
    die(mysqli_error($con));
  }
?>