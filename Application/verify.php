<?php

    $username=$_POST['username'];
    $password=$_POST['password'];


//判断用户名和密码是否填写
if($username && $password){
    // echo "enter '$username'";
    //echo "enter '$password'";
    //包含数据库连接文件
    //include('../MySQL/mysql.php');
    $conn=mysqli_connect('localhost','root','root');
    mysqli_select_db('MysysDatabase',$conn);
    // 查询usrname 和密码是否是正确
    $result_query = mysqli_query("SELECT ＊ FORM usrinfo WHERE  username='$username' ");
    
    $usrinfoarry=mysqli_fetch_array($result_query);
    echo $usrinfoarry[username];
    if($usrinfoarry[username]=$username){
        //登录成功,用户名存在
        if($usrinfoarry[password]=$password){
            header("refresh:0;url=index.php");//跳转页面，注意路径
        }else{
           echo "<script language=javascript>alert('password is incorrect，Please enter the correct password');history.back();</script>";
            
        }
        
        //$_SESSION['username'] = $username;
        //$_SESSION['userid'] = $result_query['usrid'];
        
        
    } elseif(!mysqli_query("select ＊ from usrinfo where username='$username' ")) {
       echo "<script language=javascript>alert('Username is erro');history.back();</script>";
    }elseif(!mysqli_query("select ＊ from usrinfo where password='$password' ")){
       echo "<script language=javascript>alert('password is erro');history.back();</script>";
    }

    

}else{
    //如果没有填写，提示每项未填写
    
        echo "<script language=javascript>alert('Username is not exist');history.back();</script>";
    }



?>