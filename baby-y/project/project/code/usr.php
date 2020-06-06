
<?php  


header("Content-Type: text/html;charset=utf-8");
session_start();  
include("link.php");
   
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['username'])){  
    header("Location:login.html");  
    exit();  
}  

//$id = $_SESSION['id'];  
$username = $_SESSION['username'];
//$lucknum = $_SESSION['lucknum'];

$user_query = mysqli_query($link, "SELECT username,lucknum,whatup  FROM user WHERE username = '$username';");  
$row = mysqli_fetch_array($user_query);  

$lucknum = $row["lucknum"];
//echo $lucknum;

$user_query2 = mysqli_query($link, "SELECT username,lucknum,whatup FROM  user WHERE username = '$username' AND lucknum = '$lucknum';");
$row2 = mysqli_fetch_array($user_query2);

?>




<!DOCTYPE html>
<html>
<head>
	<title>user.info</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <style>

    	hr.style-one {/*内嵌水平线*/
			width:80%;
			margin:0 auto;
			border: 0;
			height: 1px;
			background: #333;
			background-image: linear-gradient(to right, #ccc, #333, #ccc);
		}

		.up1{
			position: fixed;
			right: 80px;
			top: 30px; 
		}

		.main{
	
			display: block;
			margin: 50px auto 50px auto;
			padding: 150px 200px 200px 200px;
			font-size: 30px;
			text-align: center;
		}


    </style>
</head>
<body>


<div class="up1">
	<p style="font-size: 25px">
		<?php echo $row2[username]; ?>
		<?php echo '<a href="./login.php?action=logout">Sign Out</a>';  ?>
		<img src="css/syclogo.png" width="150px" style="position: fixed; left: 40px; top: 5px;">
	</p>
</div>


<div class="main">
	<p style="font-size: 50px"><?php echo 'user info<br/>'; ?></p>
	<?php

			//echo '用户ID：',$id,'<br />';  
			echo 'username：',$row2['username'],'<br/>';  
			echo 'lucky num：',$row2['lucknum'],'<br/>';
			echo "what's up：", $row2['whatup'],'<br/>';
		
	?>
</div>


</body>
</html>


