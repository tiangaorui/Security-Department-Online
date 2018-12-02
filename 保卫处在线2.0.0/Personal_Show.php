<?php
include "CONNECT.php";
$database="bwconline";
$db = new MySQLi($host,$user,$password,$database);
!mysqli_connect_error() or die("连接失败！！");
session_start();
$getid=$_POST['text2'];
$sql = "SELECT * from bwconline where StuID =$getid";
$info111 = $db->query($sql);
$row111=mysqli_fetch_assoc($info111);
$name=$row111["name"];
$time=$row111["time"];
$sql1= "SELECT * from bwcreply where `name` = '$name' and `time` = '$time'";
$info112 = $db->query($sql1);
$row112=mysqli_fetch_assoc($info112);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>个人中心</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js">
    </script>
    <!-- //js -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //font-awesome icons -->
    <link href="http://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header w3layouts">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a style="font-family: STFangsong" class="navbar-brand" href="index.html">保卫处在线</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-13" id="cl-effect-13">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">主页</a></li>
                        <li><a href="我要求助.html">我要求助</a></li>
                        <li><a href="Personal_Center.php">个人中心</a></li>
                        <li><a href="近期情况.html">近期情况</a></li>
                    </ul>

                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- banner -->
<div class="w3-banner1">

</div>
<!-- //banner -->
<!-- icons -->
<br/>
<br/>
<h2 class="w3l_head w3l_head1">个人中心</h2>

<br/>
<br/>
<div class="container" id="lb" style="display:block">
    <div class="well" style="min-height: 100px; overflow: hidden">
        <strong><p id="time">时间:<?php echo $time;?></p></strong>
        <div id="content" style="width: 800px; float: left">求助内容：<?php echo $row111["text"];?></div>
        <div id="content1" style="width: 800px; float: left">回复：<?php echo $row112["bmessage"];?></div>
        <div id="content2" style="width: 800px; float: left">保卫处联系方式:<?php echo $row112["bphonenum"];?></div>
        <div id="image" style="width: 280px; float: right">求助图片：<img src="<?php echo  $row111["location"];?>" width="270px" onclick="javascript:window.open(this.src)" style="cursor: pointer"></div>
        <div id="image1" style="width: 280px; float: right">回复图片：<img src="<?php echo $row112["location"]; ?>" width="270px" onclick="javascript:window.open(this.src)" style="cursor: pointer"></div>
    </div>
</div>


<!-- //icons -->
<!-- footer -->
<div class="agileinfo_footer_bottom">
    <div class="container">
        <div class="col-md-4 agileinfo_footer_bottom_grid">
            <h3>联系我们</h3>
            <ul>
                <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 上海交通大学保卫处</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>邮编：200030</li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 54749110</li>
            </ul>

        </div>

        <div class="col-md-4 agileinfo_footer_bottom_grid">
            <h3>相关网站</h3>
            <p><a href="http://electsys.sjtu.edu.cn/edu/">教学信息服务网</a></p>
        </div>
        <div class="col-md-4 agileinfo_footer_bottom_grid">
            <h3>一些图片</h3>
            <div class="flickr-grids">
                <div class="flickr-grid agileits_w3layouts_flickr">
                    <a href="#"><img src="images/2.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/3.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/4.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"> </div>

                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/5.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/6.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/7.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>


<!-- //footer -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>