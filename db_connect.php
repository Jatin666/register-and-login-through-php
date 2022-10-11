<?php 

//connect to the database
$conn = mysqli_connect('localhost','admin','admin','login');

//check connection
if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
}
?>