<?php
require_once 'config.php';


// sql to create table
$sql = "CREATE TABLE membersInfo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user_id INT(6),
group_id INT(6),
date_time TIMESTAMP DEFAULT NOW()
)";

if (mysqli_query($conn, $sql)) {
    echo "Table membersInfo created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>