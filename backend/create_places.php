<?php
require_once 'config.php';


// sql to create table
$sql = "CREATE TABLE placeInfo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
place_name VARCHAR(30) NOT NULL,
group_id INT(6),
is_visited INT(1),
date_time TIMESTAMP DEFAULT NOW()
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Group created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>