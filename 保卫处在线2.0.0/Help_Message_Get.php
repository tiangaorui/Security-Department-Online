<?php
include "CONNECT.php";
if(isset($_POST['submit'])){
	$conn = new mysqli($host,$user,$password,$dbname);
	!mysqli_connect_error() or die("连接失败！！");
    $username=$_POST['Name'];
    $StuID=$_POST['StuID'];
    $userphone=$_POST['Phone_Number'];
    $usermessage=$_POST['Message'];
    $fileinfo = $_FILES['doc'];
    $path = 'upload';
    $ext = pathinfo($fileinfo['name'], PATHINFO_EXTENSION);
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
        chmod($path, 0777);
    }
    $uniName = md5(uniqid(microtime(true), true)) . '.' . $ext;
    $destination = $path . '/' . $uniName;
    move_uploaded_file($fileinfo['tmp_name'], $destination);
    date_default_timezone_set('PRC');
    $time=date('Y-m-d H:i:s');
    $sql = "INSERT INTO bwconline VALUES ('$username','$StuID','$userphone','$usermessage','$time','$destination')";
	if($conn->query($sql)==TRUE){Header("Location: %E5%8F%91%E9%80%81%E6%88%90%E5%8A%9F.html");}
	else {Header("Location: %E5%8F%91%E9%80%81%E5%A4%B1%E8%B4%A5.html");}
	$conn->close();
}
else {Header("Location: %E5%8F%91%E9%80%81%E5%A4%B1%E8%B4%A5.html");}