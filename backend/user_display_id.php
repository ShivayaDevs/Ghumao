<?php

require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $user_id = $_POST['user_id'] ;


    $query = "select * from groupInfo where id =  $user_id; ";
  

    if($conn->query($query) == TRUE)
    {
      $r = $conn->query($query) ;
        
      $result = array();
        
     while($res = mysqli_fetch_array($r)){
        array_push($result,array(
        "user_id"=>$res['id'],
        "user_name"=>$res['user_name'],
        "mobile"=>$res['mobile']
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
