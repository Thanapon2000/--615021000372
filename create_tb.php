<?php include("connect_db2.php");


//create tb
$sql = "CREATE TABLE movie (
mvid VARCHAR(50) PRIMARY KEY NOT NULL,
mvname VARCHAR(50) NOT NULL,
mvtime DATETIME NOT NULL,
username VARCHAR(50) NOT NULL,
pin INT NOT NULL)";

if($conn->query($sql) === TRUE){
    echo "table created success";
}else{
    echo"error". $conn->error;
}
$conn->close();
?>
