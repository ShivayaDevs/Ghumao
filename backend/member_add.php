<?php

require_once 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $user_id = $_POST['user_id'] ;
    $group_id = $_POST['group_id'] ;

    $query = "INSERT INTO membersInfo(user_id, group_id) VALUES($user_id, $group_id)";
    
    if($conn->query($query) == TRUE)
      echo "member added successfully!" ;
    else
      echo "Unable to add person.";
    $conn->close();
  }



?>
