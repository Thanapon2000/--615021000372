<?php include("connect_db2.php");?>
<html>
<head>
    <title>MARVEL MOVIE</title>
</head>
<body>
<h1>ข้อมูลภาพยนต์</h1>
<h2>รายชื่อภาพยนต์กำลังฉาย</h2>
    <table>
        <tr>
            <th>รหัสภาพยนต์</th>
            <th>ชื่อภาพยนต์</th>
            <th>วัน-เวลาที่ฉาย</th>
            <th>ชื่อลูกค้า</th>
            <th>รหัส</th>
        </tr>

<?php  
    $sql = "SELECT * FROM movie";
    $run = $conn->query($sql);
    if($run->num_rows > 0){
        while($row = $run->fetch_assoc()){
    ?>

            <tr>
                <td><?php echo $row['mvid']; ?></td>
                <td><?php echo $row['mvname']; ?></td>
                <td><?php echo $row['mvtime']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['pin']; ?></td>
            </tr>
<?php
        }
    }
?>
    </table>
</body>
</html>