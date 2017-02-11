<?php

require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $group_id = $_POST['group_id'] ;


    $query = "select * from placeInfo where group_id = $group_id";
  

    if($conn->query($query) == TRUE)
    {
      $r = $conn->query($query) ;
        
      $result = array();
        
     while($res = mysqli_fetch_array($r)){
        array_push($result,array(
        "place_id"=>$res['id'],
        "group_id"=>$res['group_id'],
        "summary" => $res['summary'],
        "place_name"=>$res['place_name'],
        "is_visited"=>$res['is_visited'],
        "photo_url"=>$res['photo_url']
        
        
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
