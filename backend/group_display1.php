<?php

require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $user_id = $_POST['user_id'] ;


    $query = "select * from membersInfo,groupInfo where membersInfo.user_id =  $user_id and groupInfo.id = membersInfo.group_id; ";
  

    if($conn->query($query) == TRUE)
    {
      $r = $conn->query($query) ;
        
      $result = array();
        
     while($res = mysqli_fetch_array($r)){
        array_push($result,array(
        "user_id"=>$res['user_id'],
        "group_id"=>$res['group_id'],
        "location" => $res['location'],
        "group_name"=>$res['group_name']
        
        
          )
        );

      }
      //Displaying the array in json format 
      echo json_encode($result);
     
    
    }
  else
    echo "Unable to display.";
}
$conn->close();
  



?>
