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

    <form action = "1.3_index.php" method = "post">

<h2>
    ค้นหา : <input name = "txttest" type ="text" placeholder = 'Search..'>
    <button type = "submit" name ="search">ค้นหา</button>
</h2>
    <table border = 1>
        <tr>
            <th>รหัสภาพยนต์</th>
            <th>ชื่อภาพยนต์</th>
            <th>วัน-เวลาที่ฉาย</th>
            <th>ชื่อลูกค้า</th>
            <th>รหัส</th>
            <th>---</th>
            <th>---</th>
        </tr>

    <?php
        if(isset($_POST['search'])) {
            $txttest = $_POST['txttest'];
                if($txttest != ""){
                    $query = "SELECT * FROM movie WHERE (mvname LIKE '%".$_POST['txttest']."%')";
                    $run = mysqli_query($conn,$query);
                    while ($row = $run->fetch_assoc()){
    ?>
                    <tr>
                        <td><?php echo $row['mvid']; ?></td>
                        <td><?php echo $row['mvname']; ?></td>
                        <td><?php echo $row['mvtime']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['pin']; ?></td>
                        <td><a href = "edit.php?edit_id=<?php echo $row["stdid"];?>">EDIT</td>
                        <td><a href ="delete.php?delete_id=<?php echo $row["stdid"];?>">DELETE</td>
                    </tr>
                    
    <?php
                    }
                }else{
                    $query = "SELECT * FROM movie";
                    $run = mysqli_query($conn,$query);
                    while ($row = $run->fetch_assoc()){
    ?>
                <tr>
                        <td><?php echo $row['mvid']; ?></td>
                        <td><?php echo $row['mvname']; ?></td>
                        <td><?php echo $row['mvtime']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['pin']; ?></td>
                        <td><a href = "edit.php?edit_id=<?php echo $row["stdid"];?>">EDIT</td>
                        <td><a href ="delete.php?delete_id=<?php echo $row["stdid"];?>">DELETE</td>
                    </tr>
    <?php   
                    }
                }
            }
    ?>
</body>
</html>