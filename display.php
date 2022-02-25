<?php
  include 'connect.php';
  if(isset($_POST['displaySend'])){
    $table='<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Endereço</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>';
    $sql = "Select * from crud";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $id=$row['Id'];
      $name=$row['name'];
      $phone=$row['phone'];
      $address=$row['address'];
      $email=$row['email'];

      $table.='<tr>
      <td scope="row">'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$address.'</td>
    </tr>';
    }

    $table.="</table>";
    echo $table;

  }

?>