<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>任务平台</title>
    <script src="./js/login.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
        }
        html,body{
            width: 100%;
            height: 100%;
            font-size: 14px;
        }
        .login{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #login{
            text-align:center;
        }
        #login a{
            display:inline-block;
            width:5px;
        }
        #login div{
            height: 40px;
            line-height: 40px;
        }
        #login div .intext,.inpass{
           padding: 10px 10px 10px 10px;
           outline-color: #165DFF;
           outline-width: 1px;
           border: none;
           border-radius: 5px;
           background-color:#E5E6EB;
           font-size: 12px;
        }
        #login div:nth-child(5) input{
            width: 50px;
            height: 30px;
            border: none;
            color: #828A96;
            background-color: #E5E6EB;
            cursor:pointer;
        }
        #login div .aa{
           padding: 10px 10px 10px 10px;
           outline-width: 1px;
           border: none;
           border-radius: 5px;
           background-color:#FDCDC5;
           font-size: 12px;
           outline-color: red;
        }
        #login p{
            font-size: 10px;
            text-align: center;
            margin-right: 70px;
            color: red;
            display: none;
        }
	#login input[type="submitt"]:focus{
	background:blue;
}
    </style>
</head>
<body>
    <div class="login">
<div id="login">
    <div>账号<a></a><input type="text" placeholder="请输入账号" class="intext intxt-blue" onfocus="focu(this)" name="txt"></div>
    <p>请输入消息</p>
    <div>密码<a></a><input type="password" placeholder="请输入密码" class="inpass intxt-blue" onfocus="focu(this)" name="pass"></div>
    <p>请输入密码</p>
    <div><input type="submit" value="登录" onclick="login()"></div>
</div>
    </div>
</body>
</html>