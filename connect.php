<?php

//this is a code from the internet 
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "web2021";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()){
    echo'failed to connect: '.mysqli_connect_errno();
}
else {
    echo 'suuccesfully connected';}
?>