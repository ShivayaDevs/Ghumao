<?php

require_once 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $place_name = $_POST['place_name'] ;
    $is_visited = $_POST['is_visited'];
    $group_id = $_POST['group_id'];
    $summary = $_POST['summary'];
    $photo_url = $_POST['photo_url'];

    $query = "INSERT INTO placeInfo(place_name, is_visited, group_id, summary, photo_url) VALUES('$place_name', '$is_visited',$group_id, '$summary', '$photo_url')";
    
    if($conn->query($query) == TRUE)
      echo "Group added successfully!" ;
    else
      echo "Unable to add person.";
    $conn->close();
  }

?>
