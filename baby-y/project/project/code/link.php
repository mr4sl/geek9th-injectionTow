<?php

include("config.inc.php");


$link = mysqli_connect($_MyTest['db_server'], $_MyTest['db_username'], $_MyTest['db_password'],$_MyTest['db_name']);



if(!$link){


	die("could not connect the server,please contact the subject person");

}



$database = mysqli_select_db($link, $_MyTest['db_name']);



if(!$database){

	die("could not connect the database,please contact the subject person");

}
?>