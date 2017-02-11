<?php
require_once 'config.php';

$query = mysql_query("SELECT * FROM user");
if(mysql_num_rows($query)!=0)
{
    $row = mysql_fetch_assoc($query);
    echo $row['user_name'];
    echo $row['mobile'];
}



?>