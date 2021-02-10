<?php include("connect_db2.php");

//create db
$sql = "CREATE DATABASE movie";

if($conn->query($sql) === TRUE){
    echo "db created success";
}else{
    echo "error". $conn->error;
}
$conn->close();





?>