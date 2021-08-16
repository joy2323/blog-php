# blog-php

On the Root Path, create a config file ===> 'config.php'

Use the following to set up your database connection


<?php
session_start();

//connect to the database...
$conn = mysqli_connect("localhost", "dbusername", "dbpassword", "dbname");



if (!$conn){
    die("Error connecting to database: " . mysqli_connect_error());
}


//define global constants
# ROOT_PATH is set to the physical address with respect to the operating system, to the current directory on which this file (config.php) resides.

define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/{project-name}');


# BASE_URL is merely a web address that sets a URL pointing to the root of our website. 
# In our case, its value is http://localhost/blog-php. It is used to form links to CSS, images, javascript.


?>