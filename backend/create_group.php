<?php
require_once 'config.php';


// sql to create table
$sql = "CREATE TABLE groupInfo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
group_name VARCHAR(30) NOT NULL,
location VARCHAR(50),
owner_id INT(6),
date_time TIMESTAMP DEFAULT NOW()
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Group created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>