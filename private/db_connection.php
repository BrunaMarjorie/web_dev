<?php
/*****************************************
* This query uses the procedural interface
******************************************/

//Credentials
$dbhost = 'sql305.epizy.com';
$dbuser = 'epiz_25784814';
$dbpass = 'FnmnrtFmu3XzN3S';
$dbname = 'epiz_25784814_webdev';

/*
// Credentials
$dbhost = '127.0.0.1:3306';
$dbuser = 'root';
$dbpass = 'Inh@3142';
$dbname = 'employees'; */

// Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}
?>