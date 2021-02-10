<?php include("connect_db2.php");
    if(isset($_GET['delete_id'])){

        $delete_id = $_GET['delete_id'];
        $sql = "DELETE FROM movie WHERE mvid='".$delete_id."'";
        $run = $conn->query($sql);

        if(mysqli_query($conn,$sql)){
            echo"<script>alert('ลบเรียบร้อย'); window.location='1.6_index.php';</script>";
            }else{
                echo"ผิดพลาด" .$sql . "<br>".mysqli_query($conn);
        }

        $conn->close();
        }
    ?>