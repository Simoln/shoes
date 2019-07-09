<?php
    $server="localhost";//主机
    $db_username="root";//你的数据库用户名
    $db_password="";//你的数据库密码

    $con = mysqli_connect($server,$db_username,$db_password);//链接数据库
    if(!$con){
        die("数据库连接失败".mysqli_connect_error());//如果链接失败输出错误
    }
    
    mysqli_select_db($con,"shoes");//选择数据库
    $charset="set names utf8;";
    mysqli_query($con,$charset);
?>