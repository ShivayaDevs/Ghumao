<?php

require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $group_id = $_POST['group_id'] ;


    $query = "select * from photoInfo where group_id = $group_id;";
  

    if($conn->query($query) == TRUE)
    {
      $r = $conn->query($query) ;
        
      $result = array();
        
     while($res = mysqli_fetch_array($r)){
        array_push($result,array(
         "photo_id"=>$res['photo_id'],
        "group_id"=>$res['group_id'],
        "place_id" => $res['place_id'],
        "url"=>$res['url'],
        "photo_name" =>$res['photo_name']
        
        
        
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
