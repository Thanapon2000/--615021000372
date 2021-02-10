<html>
<head>
    <title>login</title>
</head>
<body>

<h1>ยืนยันตัวตนเข้าสู่ระบบ</h1>
<form action ="login.php" method="post">
    <h2>Username
    <input name="username" type ="text" placeholder ="username"></h2>

    <h2>Password
    <input name="pin" type ="text" placeholder ="pin"></h2>

    <br>
    <button type = "submit" name ="login">ยืนยัน</button>
    <button type = "reset" name = "cancel">ยกเลิก</button>
<?php include("connect_db2.php");
    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['pin'];

        $sql =  "SELECT * FROM movie WHERE username = '$user' and pin = '$pass'";
        $query = mysqli_query($conn,$sql);
        $save = mysqli_fetch_array($query);
        
        if(!$save)
        {
            echo"<script>alert('error'); window.location = 'login.php';</script>";
        }else{
            echo"<script>alert('success'); window.location = '1.6_index.php';</script>";
        }
    }
?>
</form>

</body>
</html>