<?php
//连接数据库部分
header("content-type:text/html;charset=utf-8");
include "CONNECT.php";
$database="bwconline";
$db = new MySQLi($host,$user,$password,$database);
!mysqli_connect_error() or die("连接失败！！");
$db->query("set names utf8");
session_start();
if(!empty($_SESSION['page'])){
    $page =$_SESSION['page'];
}
else{$page=1;}//初始默认页数
$_SESSION['page']=$page;

$sql1="select * from bwconline";
$result0=$db->query($sql1);
$MAX_ROW=mysqli_num_rows($result0);//数据总量
$REST=$MAX_ROW%5;//涉及最后页面的余数
$MAX_PAGE=($MAX_ROW-$REST)/5+1;//最大页面数



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>信息列表</title>
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
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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
<br/><br/><br/>
<h2 class="w3l_head w3l_head1">消息列表</h2>
<br/>
<?php
$shownum = 5*($page-1);
$_SESSION['shownum']=$shownum;

$sql2 = "SELECT * from bwconline limit $shownum,5";
$info = $db->query($sql2);
$shownum1=$shownum;
?>

<div class="container">
    <div class="well">
        <?php $row1=mysqli_fetch_assoc($info);?>
        <strong><p id="time1">时间：<?php echo $row1["time"];?></p></strong>
        <p id="whether1">是否回复：<?php $sql01= " SELECT * FROM bwcreply where id = $shownum1";
                                    $re1=$db->query($sql01);
                                    $row01=mysqli_fetch_assoc($re1);
                                    if (!empty($row01["bmessage"])){echo '是';}else{echo'否';}
                                    $shownum1+=1;?></p>
        <p id="content1">缩略消息：<?php if (strlen($row1['text'])>100){echo substr($row1['text'],0,100)."…";}else{echo $row1['text'];}?></p>
        <p align="right">
            <a href="BWC_BReply.php?show=1"> <input type="button" name="reply" value="回复" > </a>
        </p>
    </div>
    <div class="well">
        <?php $row2=mysqli_fetch_assoc($info);?>
        <strong><p id="time2">时间：<?php echo $row2["time"];?></p></strong>
        <p id="whether2">是否回复：<?php $sql02= " SELECT * FROM bwcreply where id = $shownum1";
            $re2=$db->query($sql02);
            $row02=mysqli_fetch_assoc($re2);
            if (!empty($row02["bmessage"])){echo '是';}else{echo'否';}
            $shownum1+=1;?></p>
        <p id="content2">缩略消息：<?php if (strlen($row2['text'])>100){echo substr($row2['text'],0,100)."…";}else{echo $row2['text'];}?></p>
        <p align="right">
            <a href="BWC_BReply.php?show=2"> <input type="button" name="reply" value="回复" > </a>
        </p>
    </div>
    <div class="well">
        <?php $row3=mysqli_fetch_assoc($info);?>
        <strong><p id="time3">时间：<?php echo $row3["time"];?></p></strong>
        <p id="whether3">是否回复：<?php $sql03= " SELECT * FROM bwcreply where id = $shownum1";
            $re3=$db->query($sql03);
            $row03=mysqli_fetch_assoc($re3);
            if (!empty($row03["bmessage"])){echo '是';}else{echo'否';}
            $shownum1+=1;?></p>
        <p id="content3">缩略消息：<?php if (strlen($row3['text'])>100){echo substr($row3['text'],0,100)."…";}else{echo $row3['text'];}?></p>
        <p align="right">
            <a href="BWC_BReply.php?show=3"> <input type="button" name="reply" value="回复" > </a>
        </p>
    </div>
    <div class="well">
        <?php $row4=mysqli_fetch_assoc($info);?>
        <strong><p id="time4">时间：<?php echo $row4["time"];?></p></strong>
        <p id="whether4">是否回复：<?php $sql04= " SELECT * FROM bwcreply where id = $shownum1";
            $re4=$db->query($sql04);
            $row04=mysqli_fetch_assoc($re4);
            if (!empty($row04["bmessage"])){echo '是';}else{echo'否';}
            $shownum1+=1;?></p>
        <p id="content4">缩略消息：<?php if (strlen($row4['text'])>100){echo substr($row4['text'],0,100)."…";}else{echo $row4['text'];}?></p>
        <p align="right">
            <a href="BWC_BReply.php?show=4"> <input type="button" name="reply" value="回复" > </a>
        </p>
    </div>
    <div class="well">
        <?php $row5=mysqli_fetch_assoc($info);?>
        <strong><p id="time5">时间：<?php echo $row5["time"];?></p></strong>
        <p id="whether5">是否回复：<?php $sql05= " SELECT * FROM bwcreply where id = $shownum1";
            $re5=$db->query($sql05);
            $row05=mysqli_fetch_assoc($re5);
            if (!empty($row05["bmessage"])){echo '是';}else{echo'否';}?></p>

        <p id="content5">缩略消息：<?php if (strlen($row5['text'])>100){echo substr($row5['text'],0,100)."…";}else{echo $row5['text'];}?></p>
        <p align="right">
            <a href="BWC_BReply.php?show=5"> <input type="button" name="reply" value="回复" > </a>
        </p>
    </div>
    <nav style="margin:0 auto; float: right">

        <ul class="pagination">
            <li><a href="refresh.php?bias=-9" aria-label="Previous"><span aria-hidden="true">上一页</span></a></li>
            <li><a href="refresh.php?bias=-2"> <?php if($page>=3){echo $page-2;} else{if($page==2){echo $page-1;}else{echo $page;}}?></a></li>
            <li><a href="refresh.php?bias=-1">  <?php if($page>=3){echo $page-1;} else{if($page==2){echo $page;}else{echo $page+1;}}?></a></li>
            <li><a href="refresh.php?bias=0"> <?php if($page>=3){echo $page;} else{if($page==2){echo $page+1;}else{echo $page+2;}}?></a></li>
            <li><a href="refresh.php?bias=+1">    <?php if($page>=3){echo $page+1;} else{if($page==2){echo $page+2;}else{echo $page+3;}}?></a></li>
            <li><a href="refresh.php?bias=+2">    <?php if($page>=3){echo $page+2;} else{if($page==2){echo $page+3;}else{echo $page+4;}}?></a></li>
            <li><a href="refresh.php?bias=+9" aria-label="Next"><span aria-hidden="true">下一页</span></a></li>


        </ul>
    </nav>
</div>

<!-- //icons -->
<!-- footer -->
<div class="agileinfo_footer_bottom">
    <div class="container">
        <div class="col-md-4 agileinfo_footer_bottom_grid">
            <h3>联系我们</h3>
            <ul>
                <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 上海交通大学保卫处</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="">邮箱</a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 54749110</li>
            </ul>

        </div>

        <div class="col-md-4 agileinfo_footer_bottom_grid">
            <h3>相关网站</h3>
            <p><a href="http://electsys.sjtu.edu.cn/edu/">教学信息服务网</a></p>
        </div>
        <div class="col-md-4 agileinfo_footer_bottom_grid">
            <h3>校园风景</h3>
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