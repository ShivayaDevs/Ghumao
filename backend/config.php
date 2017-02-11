<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '12345');
  define('DB_DATABASE', 'ghumao');
    
  $conn=mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
  if(!$conn)
  {
    if(mysqli_connect_errno())
      echo "Error in connection: ERROR: ".mysqli_connect_errno();
  }
  error_reporting(0);
?>