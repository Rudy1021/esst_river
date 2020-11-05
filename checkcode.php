<?php
include 'ChromePhp.php';
if(!isset($_SESSION)){
  session_start();
}// 判斷session是否已啟動

if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword']))){// 判斷此兩個變數是否為空
  ChromePhp::log($_SESSION['check_word']);
  if($_SESSION['check_word'] == $_POST['checkword']){
    //$_SESSION['check_word'] = ''; // 比對正確後，清空將check_word值
    echo '成功';
    exit();
  }else{
    echo '錯誤';
  }
}
?>