<?php
include "CONNECT.php";
if(isset($_POST['submit'])){
    $conn = new mysqli($host,$user,$password,$dbname);
    !mysqli_connect_error() or die("连接失败！！");
    session_start();
    $bsername=$_POST['BName'];
    $bserphone=$_POST['BPhone_Number'];
    $bsermessage=$_POST['BMessage'];
    $number = $_SESSION['number'];
    $sql001="SELECT * from bwconline limit $number,1";
    $infom=$conn->query($sql001);
    $re=mysqli_fetch_assoc($infom);
    $name=$re["name"];
    $time=$re["time"];
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
    $sql = "INSERT INTO bwcreply VALUES ('$bsername','$bserphone','$bsermessage','$number','$name','$time','$destination')";
    if($conn->query($sql)==TRUE){header("Location: http://localhost:8081/bwconline/%E6%88%91%E6%98%AF%E4%BF%9D%E5%AE%89%E5%9B%9E%E5%A4%8D%E6%88%90%E5%8A%9F.html");}
    else{header("Location: http://localhost:8081/bwconline/%E6%88%91%E6%98%AF%E4%BF%9D%E5%AE%89%E5%9B%9E%E5%A4%8D%E5%A4%B1%E8%B4%A5.html");}
    $conn->close();
}
?>
h