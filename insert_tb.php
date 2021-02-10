<?php include("connect_db2.php");

//insert itb
$sql = "INSERT INTO movie(mvid,mvname,mvtime,username,pin)
VALUES ('001','AVENGERS','2021-02-10','guys','1111');";

$sql .= "INSERT INTO movie(mvid,mvname,mvtime,username,pin)
VALUES ('002','AVENGERS2','2021-03-10','guys2','2222');";



if($conn->multi_query($sql) === TRUE){
    echo "insert success";
    
}else{
    echo"error" .$sql .$conn->error;
}

$conn->close();

?>