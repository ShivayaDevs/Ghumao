<?php

require_once 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $photo_name = $_POST['group_name'] ;
    $group_id = $_POST['group_id'] ;
    $place_id = $_POST['place_id'];
    $url = $_POST['url'];


    $query = "INSERT INTO photoInfo(photo_name, group_id, place_id, url) VALUES('$photo_name', '$group_id',$place_id, '$url')";
    
    if($conn->query($query) == TRUE)
      echo "Group added successfully!" ;
    else
      echo "Unable to add person.";
    $conn->close();
  }

?>
