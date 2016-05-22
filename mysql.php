<?php
    var $db_host= 'localhost';
    var $db_username= 'root';
    var $db_password= 'root';
    var $db_database= 'Mysysdatabase';

  
//     $db =mysql_connect($ db_host,$db_username,$-> db_password,$-> db_database);
 //       if (mysqli_connect_errno()) {
 //           echo "连接数据库失败!";
 //           exit;
 //       }
//        return $db;
//    }
//   
//}
// 创建连接
$conn = mysqli_connect($db_host, $username, $password);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

/*****************************
*数据库连接
*****************************/
//$conn = mysql_connect($db_host,$db_usrname,$db_password);
//if (!$conn){
 //   die("Connect fail" . mysql_error());
//}else{
//    echo "ok";
//}
  //  mysql_select_db($db_database, $conn);
//字符转换，读库
    //mysql_query("set character set 'utf-8'");
//写库
    //mysql_query("set names 'utf-8'");

?>