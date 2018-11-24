<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23
 * Time: 12:36
 */
//using id/name to check
$id=$_GET["id"];
//$name=$_GET["name"]

header("Content-Type: text/html; charset=utf-8");
$host="127.0.0.1:3306";
$user="host";
$password="!9(9)9)4Xpyu";
$database="001";

$db = new MySQLi($host,$user,$password,$database);
!mysqli_connect_error() or die("连接失败");

$sql001="delete from BWConline where id='{$id}'";
//$sql002="delete from BWConline where name='{$name}'";

$result=$db->query($sql001);
if ($result) {header("location:DELETE.php");}
else{echo "删除失败";}