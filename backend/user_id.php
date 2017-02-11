<?php

require_once 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $mobile = $_POST['mobile'] ;


    $query = "select * from user where mobile =  '$mobile' ; ";

    #echo $query;
    if($conn->query($query) == TRUE)
    {
      
      $r = mysqli_query($conn,$query);
      #$res = mysqli_fetch_array($r);
     
      $num_rows = mysqli_num_rows($r);

      if($num_rows == 0)
        return 0;

       while($res = mysqli_fetch_array($r)){
        $user_id = $res['id'];
      }
     
      echo $user_id;
    }
  else
    echo "Unable to display.";
}
$conn->close();
  



?>
