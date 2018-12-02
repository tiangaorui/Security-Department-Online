<?php
//页面刷新文件
session_start();
$bias=$_GET['bias'];
$page=$_SESSION['page'];
if(!($page==1 && ($bias==-9 ||$bias==-2)))//第一页前翻
        {if ($bias==+9){$page+=1;}//下一页
            else
            if ($bias==-9){$page-=1;}//上一页
                elseif(!(($page==2&&$bias==-1)||($page>=3&&$bias==0)))
                {$page1=$page;
                if($page<3)
                    {
                        if($page==2&&$bias==-2)
                            {$page1+=1;}
                        else{$page1+=2;}
                    }
                    $page1+=$bias;
                    $page=$page1;
                }
        }
$_SESSION['page']=$page;
header('Location: Message_List.php');

