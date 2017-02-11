<?php
require_once 'config.php';


// sql to create table
$sql = "CREATE TABLE photoInfo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
photo_name VARCHAR(30) NOT NULL,
url VARCHAR(50),
group_id INT(6),
place_id INT(6),
date_time TIMESTAMP DEFAULT NOW()
)";

if (mysqli_query($conn, $sql)) {
    echo "Table photo created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>