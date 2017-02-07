<?php
  require_once('connection.php');
  
  $query = "SELECT * FROM states;";
  $result = mysqli_query($connection, $query);
  
  $states = array();
  while($row = mysqli_fetch_assoc($result))
  {
      $states[] = $row;
  }
  
  echo json_encode($states);

  mysqli_close($connection);
?>