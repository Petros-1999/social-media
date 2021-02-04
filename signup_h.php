<?php

include("connect.php");


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];

//INSERT INTO `users`( `first_name`, `last_name`, `username`, `email`, `date_of_birth`, `gender`, `password`, `signup_date`, `profile_pic`, `cover_pic`, `num_posts`, `num_likes`, 
//`user_closed`, `friend_array`, `address`, `city`, `hometown`, `country`, `mobile`, `phone`, `work`)
 $sql = "INSERT INTO `users`( `first_name`, `last_name`, `username`,`email`,`date_of_birth`, `password`,`gender`) 
VALUES ('$first_name' , '$last_name' , '$username' , '$email','$date_of_birth','$password','$gender')";

$result =$connect->query("$sql");

if($sql)
{
    echo "successfully signed up";

}


?>