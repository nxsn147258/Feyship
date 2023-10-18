<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>消息通知</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        a {
            color:black;
            text-decoration: none;
        }
        
        .nav {
            height: 50px;
            line-height: 50px;
            background-color: white;
            text-align: center;
        }
        
        .xiaoxi {
            background-color: white;
        }
        
        .xiaoxi_phb {
            width: 90%;
            height: 100px;
            /* background-color: aqua; */
            margin: 0 auto;
            text-align: center;
        }
        
        .xiaoxi_phb-a {
            width: 25%;
            height: 50px;
            margin: 15px auto;
            display: inline-block;
            font-size: 12px;
        }
        
        .xiaoxi_phb-a img {
            width: 40px;
            height: 40px;
        }
        
        .xiaoxi .xiaoxi-a {
            height: 50px;
            margin-left: 10px;
            float: none;
            margin-top: 25px;
        }
        
        .xiaoxi-a img {
            width: 50px;
            height: 48px;
            vertical-align: text-top;
            float: left;
        }
        
        .xiaoxi-cc {
            float: left;
            margin-left: 5px;
        }
        
        .xiaoxi-cc a {
            display: block;
        }
        
        .xiaoxi_text-b {
            font-family: '微软雅黑';
            color: black;
        }
        
        .xiaoxi_text-b {
            margin-top: 5px;
            color: gray;
        }
        
        .footer {
            width: 100%;
            height: 60px;
            background-color: white;
            position: fixed;
            bottom: 0;
            display: flex;
        }
        
        .footer a {
            width: 33.3%;
            text-align: center;
            color: black;
            /* background-color: cadetblue; */
        }
        
        .footer a span {
            height: 30px;
            display: block;
        }
        
        .footer img {
            width: 20px;
            height: 20px;
            margin-top: 10px;
        }
    </style>
    <script src="./js/xiaoxi.js"></script>
</head>

<body>
    <div class="nav">
        <p>消息</p>
    </div>
    <div class="xiaoxi">
        <div class="xiaoxi_phb">
            <div class="xiaoxi_phb-a"><img src="../image/qiandai.png" alt="">
                <a href="../phb/jqphb.php"><p>金钱排行榜</p></a>
            </div>
            <div class="xiaoxi_phb-a"><img src="../image/phb.png" alt="">
                <a href="../phb/rwphb.php"><p>任务排行榜</p></a>
            </div>
        </div>
        <div class="xiaoxi-a">
            <img src="./image/gfxx.png" alt="官方消息">
            <div class="xiaoxi-cc"><a class="xiaoxi_text-a">系统通知</a><a class="xiaoxi_text-b">我是一段消息</a></div>
        </div>
        <div class="xiaoxi-a">
            <img src="./image/gfxx.png" alt="官方消息">
            <div class="xiaoxi-cc"><a class="xiaoxi_text-a">反馈通知</a><a class="xiaoxi_text-b">我是一段消息</a></div>
        </div>
    </div>
    <div></div>
    <div class="footer">
        <a href="index.php"><img src="./image/shouye.png" alt="">
            <p>首页</p>
        </a>
        <a href="xiaoxi.php"><img src="./image/xiaoxi1.png" alt="">
            <p>消息</p>
        </a>
        <a href="wode.php"><img src="./image/wode.png" alt="">
            <p>我的</p>
        </a>
    </div>
</body>

</html>
<?php
session_start();
if(!$_SESSION['txt']==''){
    // echo "恭喜你登录成功".$_SESSION['txt'];
}
else
{
    header("Location:login.php");
}
?>