<?php
session_start();

//connect to the database...
// $conn = mysqli_connect("localhost", "root", "", "blog-php");
$conn = mysqli_connect("db4free.net", "todoapp2020", "todoapp2020", "blog-php");


if (!$conn){
    die("Error connectibg to database: " . mysqli_connect_error());
}


//define global constants
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/blog-php/');

?>