<?php
require_once 'config.php';


// sql to create table
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user_name VARCHAR(30) NOT NULL,
mobile VARCHAR(50),
date_time TIMESTAMP DEFAULT NOW()
)";

if (mysqli_query($conn, $sql)) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>