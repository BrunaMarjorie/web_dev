<?php
/*****************************************
* This query uses the procedural interface
******************************************/


// Credentials
$dbhost = '127.0.0.1:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'employees'; 

// Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}
?>