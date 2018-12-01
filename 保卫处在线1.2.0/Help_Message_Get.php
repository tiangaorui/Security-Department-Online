<?php
include "CONNECT.php";
if(isset($_POST['submit'])){
	$username=$_POST['Name'];
	$userphone=$_POST['Phone_Number'];
	$usermessage=$_POST['Message'];
    date_default_timezone_set('PRC');
    $time=date('Y-m-d H:i:s');
	$conn = new mysqli($host,$user,$password,$dbname);
	!mysqli_connect_error() or die("连接失败！！");
	$sql = "INSERT INTO bwconline VALUES ('$username','$userphone','$usermessage','$time')";
	if($conn->query($sql)==TRUE){Header("Location: http://10.162.143.219:8081/bwconline/%E5%8F%91%E9%80%81%E6%88%90%E5%8A%9F.html");}
	else {Header("http://10.162.143.219:8081/bwconline/%E5%8F%91%E9%80%81%E5%A4%B1%E8%B4%A5.html");}
	$conn->close();
}
else {Header("http://10.162.143.219:8081/bwconline/%E5%8F%91%E9%80%81%E5%A4%B1%E8%B4%A5.html");}
?>