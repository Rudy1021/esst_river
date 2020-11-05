<?php
include 'ChromePhp.php';
header('charset=UTF-8');
require_once("static/modals/mysqli.php");

$DB = new DB;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if($_POST['type'] == 'login'){
    $userId = $_POST['userId'];
    $conn = $DB->dbConn();
    if(!$conn){
      die("connect failed".mysqli_connect_error());
    }
    $select = "SELECT * FROM `accounts` WHERE account_mail ='".$userId."'";
    ChromePhp::log($select);
    $re = $DB->dbQuery($conn, $select);
    if($re === false){
      die("Database query failed");
    }else{
      $rst = $DB->dbFetchRow($re);
      $Pwd = md5($_POST['userPassword']);
      if($rst == null){
        die("帳號或密碼錯誤");
      }else if($rst[8] == $Pwd){
        session_start();
        $_SESSION['userId']= $userId;
        echo("success");
      }else{
        die("帳號或密碼錯誤");
      }
    }
  }else if($_POST['type'] == 'signup'){
    $userId = $_POST['userName'];
    $conn = $DB->dbConn();
    if(!$conn){
      die("connect failed".mysqli_connect_error());
    }
    $select = "INSERT INTO `accounts`(`account_id`, `account_token`,".
    " `account_unit_token`, `account_type`, `account_name`, `account_".
    "tel`, `account_mail`, `account_ac`, `account_pw`, `account_build_".
    "time`) VALUES (null,md5(get_newid() * 1000 + rand() * 1000), '0df".
    "1d6aeeb8b95fac4623c35639b4e4c',4,'".$_POST['userName']."','".
    $_POST['phone']."','".$_POST['userId']."','".$_POST['userId'].
    "','".md5($_POST['userPassword'])."',now())";
    if($conn->query($select) === true){
      echo "成功";
    }else{
      echo "失敗";
    }
  }
}
#$userId = $_POST['userId'];
#echo $userId;
#拿取單一資料就停
/*
$a = $DB->dbFetchRow($re);
$count_once = count($a);
for($i = 0;$i < $count_once;$i ++){
    echo $a[$i];
    echo "<br>";
}
*/

#拿取全部資料
/*
$a = $DB->dbFetchAll($re);
$count = count($a);
#print_r($a[0]);
#print($count);
for($isa=0;$isa<$count;$isa++){
    $count_Array = count($a[$isa]);
    for($i=0;$i<$count_Array;$i++){
        print_r($a[$isa][$i]);
        echo "<br>";
    }
}
*/
?>