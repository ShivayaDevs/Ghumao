<?php

require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $group_id = $_POST['group_id'] ;


    $query = "select * from groupInfo where id =  $group_id; ";
  

    if($conn->query($query) == TRUE)
    {
      $r = $conn->query($query) ;
        
      $result = array();
        
     while($res = mysqli_fetch_array($r)){
        array_push($result,array(
        "group_id"=>$res['id'],
        "group_name"=>$res['group_name'],
        "location"=>$res['location'],
        "owner_id"=>$res['owner_id']
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
