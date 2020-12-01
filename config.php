<?php
session_start();

//connect to the database...
// $conn = mysqli_connect("localhost", "root", "", "blog-php");
$conn = mysqli_connect("db4free.net", "lifeblogg2020", "lifeblogg2020", "blogphp");


if (!$conn){
    die("Error connecting to database: " . mysqli_connect_error());
}


//define global constants
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/blog-php/');

?>