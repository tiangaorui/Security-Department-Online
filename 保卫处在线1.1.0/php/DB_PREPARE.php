<?php
/**
 * Created by PhpStorm.
 * User: XPY
 * Date: 2018/11/23
 * Time: 12:03
 * Third Edition
 */
header("Content-Type: text/html; charset=utf-8");
$host="127.0.0.1:3306";
$user="host";
$password="!9(9)9)4Xpyu";
$database="001";

$db = new MySQLi($host,$user,$password,$database);
!mysqli_connect_error() or die("连接失败！！");
$sql001 = "CREATE TABLE BWConline (
/**id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY COMMENT '学号',*/
name VARCHAR(15), 
phone INT(15) COMMENT '电话号码',
text VARCHAR(200) NOT NULL COMMENT '内容',
time TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
)";
$result = $db-> query($sql001);
if($result) {header("location:DB_PREPARE.php");}
else {echo"数据库添加失败";}
$db->close();