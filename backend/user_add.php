<?php

require_once 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $user_name = $_POST['user_name'] ;
    $mobile = $_POST['mobile'] ;

    $query = "INSERT INTO user(user_name, mobile) VALUES('$user_name', '$mobile')";
    
    if($conn->query($query) == TRUE)
      echo "Person added successfully!" ;
    else
      echo "Unable to add person.";
    $conn->close();
  }



?>
