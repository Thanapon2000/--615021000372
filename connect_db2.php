<?php

$host = "localhost";
$username = "labtest";
$password = "1111";
$mydb = "movie";

//create connec
$conn = mysqli_connect($host,$username,$password,$mydb);

//check connec
if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}
    echo"Database Connected Successfully";







?>