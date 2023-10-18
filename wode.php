<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>任务平台</title>
    <style>
        body,html{
            background-color: rgb(222, 225, 228);
            /* min-width: 400px; */
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none; 
        }
        *{
            margin: 0;
            padding: 0;
            user-select: none;
            -ms-user-select: none;
        }
        a{
            color:black;
            text-decoration: none;
        }
        .nav{
            height: 50px;
            line-height: 50px;
            background-color: white;
            text-align: center;
        }
        .content_b>li>a img{
            width:35px;
            height:35px;
            line-height:50px;
            vertical-align: middle;
            margin: 0 10px;
        }
        .footer{
            width: 100%;
            height: 60px;
            background-color: white;
            position: fixed;
            bottom: 0;
            display: flex;
        }
        .footer a{
            width: 33.3%;
            text-align: center;
            color: black;
            /* background-color: cadetblue; */
        }
        .footer a span{
            height:30px;
            display:block;
        }
        .footer img{
            width:20px;
            height:20px;
            margin-top:10px;
        }
        .content_a li{
        /* width:100%; */
        height:150px;
        /* background-color:white; */
        list-style:none;
        }
        .content_a-div{
        height:auto;
        float:left;
       margin-top:30px;
        }
        .content_a-div div{
        float:right;
         }
        .content_a-div div p{
         margin-left:10px;
        }
        .content_a li a img{
        width:100px;
        height:100px; 
        margin-top:0px;
        margin-left:10px;
        vertical-align: top;
        }
        .content_a li span{
        line-height:50px;
        margin-left:10px;
        }
        .content_b li{
        /* width:100%; */
        height:50px;
        line-height:50px;
        /* background-color:white; */
        margin-top:10px;
        list-style:none;
        }  
        .tcdl{
        width:90%;
        height:50px;
        line-height:50px;
        background-color: cornflowerblue;
        text-align:center;
        color:white;
        margin:50px auto;
        border-radius:10px;
        }
        .tcdl>a{
        color:white;
        }
        .content_a{
            width: 100%;
            height: auto;
            /* margin: 0 auto; */
            background-color: white;
            text-align: left;
        }
        .content_b{
            width: 95%;
            height: auto;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- <div class="nav"><p>我的</p></div> -->
    <div class="content">
    <ul class="content_a">
    <li><div class="content_a-div"><a><img src="./image/user.png"/></a><div><span>账户名:<?php
session_start();
if(!$_SESSION['txt']==''){
 echo $_SESSION['txt'];}
?></span><p>任务效率:78%</p></div></div></li>
</ul>
   <ul class="content_b">
   <li><a href="./wode/tixian.php"><img src="./image/tixian.png" alt="">我的钱包</a></li>
    <li><a href="./wode/renwu.php"><img src="./image/renwu.png" alt="">我的任务</a></li>
    <li><a href="./wode/mima.php"><img src="./image/mima.png" alt="">修改密码</a></li>
    <li><a href="./wode/huiyuan.php"><img src="./image/huiyuan.png" alt="">我的会员</a></li>
    <li><a href="./wode/fankui.php"><img src="./image/fankui.png" alt="">给予反馈</a></li>
    <li><a href="./wode/gy.php"><img src="./image/gy.png" alt="">关于我们</a></li>
    </ul>
    <div class="tcdl"><a href="session.php">退出登录</a></div>
    </div>
    <div class="footer">
    <a href="index.php"><img src="./image/shouye.png" alt=""><p>首页</p></a>
        <a href="xiaoxi.php"><img src="./image/xiaoxi.png" alt=""><p>消息</p></a>
        <a href="wode.php"><img src="./image/wode1.png" alt=""><p>我的</p></a>
    </div>
</body>
</html>
<?php
if(!$_SESSION['txt']==''){
        $a = 1;
}
else
{
    header("Location:login.php");
}
?>