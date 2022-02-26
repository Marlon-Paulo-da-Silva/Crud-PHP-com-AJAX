<?php
  $con = new mysqli('localhost','root','','crudajax');

  if($con){
  }else{
    die(mysqli_error($con));
  }
?>