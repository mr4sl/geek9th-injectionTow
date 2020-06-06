<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

</body>
</html>




<?php 
header("Content-Type: text/html;charset=utf-8");

session_start();
include("link.php");

//注销登录  

if($_GET['action'] == 'logout'){  
   // unset($_SESSION['id']);  
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    die('<p style="font-size:20px">Log off successfully! Click here to <a href="index.html">sign in</a></p>');  
}  
//登录  
if(!isset($_POST['submit'])){  
    exit('Illegal visit!');  
} 


$username = htmlspecialchars(addslashes($_POST['username']));
$password = MD5($_POST['password']);  

   

//检测用户名及密码是否正确
$check_query = mysqli_query($link,"SELECT username,password FROM user WHERE username='$username' AND password='$password' limit 1;");  


if($result = mysqli_fetch_array($check_query)){  
    //登录成功  

    $_SESSION['username'] = $username;
    //$_SESSION['lucknum'] = $result['lucknum'];
    echo "<script>self.location='usr.php';</script>";
    echo $username,' 欢迎你！进入 <a href="usr.php">个人中心</a><br />';  
    echo '点击此处 <a href="./login.php?action=logout">注销</a> 登录！<br />';  
    exit;  
} else {  
    exit('<p style="font-size:20px">Login failed! Click here <a href="javascript:history.back(-1);">retry</a></p> ');  
}  
   

   

   
?>