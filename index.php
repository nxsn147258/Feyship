<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>任务平台</title>
    <style>
        body,html{
            /* background-color:#e5e5e5; */
            /* min-width: 400px; */
            margin-bottom:60px;
        }
        *{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration: none;
        }
        .nav{
            height: 50px;
            line-height: 50px;
            background-color: white;
            text-align: center;
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
        .content{
            height:150px;
            background-color:white;
            margin-top:5px;
            /* color:red; */
            
        }
        .content .p{
            height: 50px;
            /* color:red; */
            /* border-bottom:1px solid #e5e5e5; */
        }
        .content button>a{
            color:white;
        }
        .p p{
            float:left;
            margin-top:5px;
        }
        .content .img-border{
            width:40px;
            height:40px;
            float:left;
            border-radius:40px;
            margin:10px 10px;
        }
        .content .renwu{
            width:50px;
            height:30px;
            font-size:12px;
            background-color:black;
            border:none;
            float:right;
            color:white;
            border-radius:5px;
            margin-right:20px;
            cursor: pointer;
        }
        .img{
            height: 50px;
            clear: none;
            text-align:left;
        }
        .img img{
            width:50px;
            height:50px;
            margin-top:5px;
            border-radius:10px;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="nav"><p>任务大厅</p></div>
    <?php
    include("conn.php");
    $sql = "SELECT * FROM renwu";
    $query = mysqli_query($conn,$sql);
    $a = '领取失败';
    while($row = mysqli_fetch_assoc($query)){
        echo '<div class="content">';
        echo '<img src="'.$row['r_tx'].'"alt="" class="img-border">';
        echo '<div class="p"><p><span>标题:'.$row['r_bt'].'</span><br><span>'.$row['r_js'].'</span></p></div>';
        echo '<div class="img"><img src="./image/pdd.png" alt=""><img src="./image/pdd.png" alt=""><img src="./image/pdd.png" alt=""></div>';
        echo "<button class=\"renwu\"><a onclick=\"javascript:alert('领取失败')\">领取任务</a></button>";
        echo '</div>';
    }
    ?>
    <div></div>
    <div class="footer">
        <a href="index.php"><img src="./image/shouye1.png" alt=""><p>首页</p></a>
        <a href="xiaoxi.php"><img src="./image/xiaoxi.png" alt=""><p>消息</p></a>
        <a href="wode.php"><img src="./image/wode.png" alt=""><p>我的</p></a>
    </div>
</body>
</html>
<?php

?>