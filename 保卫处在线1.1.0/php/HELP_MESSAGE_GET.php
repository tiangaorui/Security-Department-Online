<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23
 * Time: 11:48
 */
header("Content-Type: text/html; charset=utf-8");
$host="127.0.0.1:3306";
$user="host";
$password="!9(9)9)4Xpyu";
$database="001";

$db = new MySQLi($host,$user,$password,$database);
!mysqli_connect_error() or die("连接失败！！");

$questype = $_POST["radio[]"];
/**  $picture =
 *   预留给图片传递
 * $id = $_POST[""] 预留学号
 */
$name = $_POST["Name"];
$message = $_POST["Message"];
$Phonenum = $_POST["Phone_Number"];
if ($_POST["submit"]!="发送") {echo "发送失败<br />";}

$sql = "insert into BWConline(`name`, `phone`,`text`) values ($name,$Phonenum,$message)";
$result = $db->query($sql);
if($result) {header("HELP_MESSAGE_GET.php");}
else {echo"数据插入失败";}
$db->close();
