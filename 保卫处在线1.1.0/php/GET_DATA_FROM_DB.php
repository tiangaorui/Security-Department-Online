<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23
 * Time: 12:24
 *                NOT FINISHED!!!
*/
header("Content-Type: text/html; charset=utf-8");
$host="127.0.0.1:3306";
$user="host";
$password="!9(9)9)4Xpyu";
$database="001";

$db = new MySQLi($host,$user,$password,$database);
!mysqli_connect_error() or die("连接失败");

$sql="select * from BWConline";
$result=$db->query($sql);
while($attr=$result->fetch_row()){echo "
 <tr>
<td>{$attr[0]}</td>
<td>{$attr[1]}</td>
<td>{$attr[2]}</td>
<td>{$attr[3]}</td>
</tr>}
//This part can be added into HTML file.
