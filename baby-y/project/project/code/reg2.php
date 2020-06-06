<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

</body>
</html>





<?php  

    header("Content-Type: text/html;charset=utf-8");
    include("link.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_re = $_POST['password_re'];
    $lucknum = $_POST['lucknum'];

    if( (!empty($username)) && (!empty($password)) && (!empty($password_re)) )  

    {

        if(!empty($lucknum)){
            if(!is_numeric($_POST["lucknum"])){
                die("<script>alert('Lucky number only allowed figures'); history.go(-1);</script>");
            }
        }


        if(!preg_match("/[A-Za-z0-9]$/", $username) ){
            die("<script>alert('User name only allows number and letters.'); history.go(-1);</script>");
        }

        if(strlen($username)<4){
            die("<script>alert('The user name is less than 4 bits.'); history.go(-1);</script>");
        }        

        if(strlen($username)>100){
            die("<script>alert('User name is too long'); history.go(-1);</script>");
        }

        if(strlen($whatup)>600){
            die("<script>alert('what's up is too long'); history.go(-1);</script>");
        }

        $username = htmlspecialchars(addslashes($_POST["username"]));

        $password = md5($_POST["password"]);

        $password_re = md5($_POST["password_re"]);

        $lucknum = addslashes($_POST["lucknum"]);

        $whatup = htmlspecialchars(addslashes($_POST["whatup"]));

        if($username == "" || $password == "" || $password_re == "")  

        {  

            echo "<script>alert('No space left!'); history.go(-1);</script>";  

        }  

        else 

        {  

            if($password == $password_re)

            {  

               
                $sql = "SELECT username FROM user WHERE username = '$username';"; 
                $result = mysqli_query($link, $sql);   

                $num = mysqli_num_rows($result); //统计执行结果影响的行数  

                if($num)    //如果已经存在该用户  

                {  

                    echo "<script>alert('User name already exists.'); history.go(-1);</script>";  

                }  

                else   
                {  
                    if(!empty($lucknum)){

                        $sql_insert = "INSERT INTO user (username,password,lucknum,whatup) VALUES ('$username','$password',$lucknum,'$whatup');";  

                        $res_insert = mysqli_query($link, $sql_insert);  
                    }else{
                        $sql_insert = "INSERT INTO user (username,password,lucknum,whatup) VALUES ('$username','$password','$lucknum','$whatup');";  

                        $res_insert = mysqli_query($link, $sql_insert);
                    }

                    //$num_insert = mysql_num_rows($res_insert);  

                    if($res_insert)  

                    {  

                        echo "<script>alert('Register was successful'); top.location='index.html';</script>";

                    }  

                    else 

                    {  

                        echo "<script>alert('Failure, please try again.'); history.go(-1);</script>";  

                    }  

                }  

            }  

            else 

            {  

                echo "<script>alert('Password inconsistent'); history.go(-1);</script>";  

            }  

        }  

    }  

    else 

    {  

        echo "<script>alert('Failure to submit, please try again.'); history.go(-1);</script>";  

    }  

?>
