<?php
include('conn.php');
session_start();
$txt = $_GET['txt'];
$pass = $_GET['pass'];
$sql = "SELECT * FROM login WHERE username='$txt' AND password='$pass'";
$query = mysqli_query($conn,$sql);
$mima = true;
if(mysqli_num_rows($query)>0){
$_SESSION['txt'] = $txt;
while($row=mysqli_fetch_assoc($query)){
    if($row['quxi']=='管理员'){
        $_SESSION['quxi'] = $row['quxi'];
        $_SESSION['lj'] = $row['lj'];
        $_SESSION['pass'] = $row['password'];
        $_SESSION['htai'] = '<a href="'.$row['htai'].'">'.进入后台.'</a>';
    }else{
        $_SESSION['quxi'] = $row['quxi'];
    }
}
echo '欢迎回来';
header('Location:index.php');
}else{
echo '<script>alert("您的用户名或密码错误")</script>';
$mima = false;
}if($mima==false){
    header('Location:login.php');
}
?>