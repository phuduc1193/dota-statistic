<?php
  require_once('connection.php');
  
  $query = "SELECT * FROM users;";
  $result = mysqli_query($connection, $query);
  
  $users = array();
  while($row = mysqli_fetch_assoc($result))
  {
      $users[] = $row;
  }
  
  echo json_encode($users);

  mysqli_close($connection);
?>