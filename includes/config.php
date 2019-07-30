<?php
$hostname="localhost";
$user="root";
$password="";
$db_name="baba";
$conn= mysqli_connect($hostname,$user,$password,$db_name);
if(!$conn) {
    die("could not connect".mysqli_connect_error());
} else {
    echo "connection established";

}


?>