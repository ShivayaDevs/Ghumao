<?php

require_once 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $group_name = $_POST['group_name'] ;
    $location = $_POST['location'] ;
    $owner_id = $_POST['owner_id'];

    $query = "INSERT INTO groupInfo(group_name, location, owner_id) VALUES('$group_name', '$location',$owner_id)";

    
    if($conn->query($query) == TRUE)
    {
      $sql = "Select * from groupInfo where location = '$location' and owner_id = '$owner_id';";
      
      #echo $sql;
      $r = mysqli_query($conn,$sql);
        
     while($res = mysqli_fetch_array($r)){
        $group_id = $res['id'];
      }
      //Displaying the array in json format 
      
      #echo $group_id;
      $sql = "INSERT INTO membersInfo(user_id, group_id) VALUES($owner_id, $group_id)";
      if($conn->query($sql) == TRUE)
      {
        echo $group_id;
      }

    }
    else
      echo "Unable to add person.";
    $conn->close();
  }

?>
