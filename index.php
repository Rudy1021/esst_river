<?php
header("Content-Type:text/html; charset=utf-8");
if(isset($_GET['page']) AND !empty($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 'login';
}

switch($page){
  case 'login':
    include('header_login.php');
    include('login.php');
    include('footer_login.php');
    break;
  case 'data':
    include('header.php');
    include('data.php');
    include('footer.php');
    break;
  case 'mileage':
    include('header.php');
    include('mileage.php');
    include('footer.php');
    break;
  case 'propertyIM':
    include('header.php');
    include('propertyIM.php');
    include('footer.php');
    break;
  case 'propertySort':
    include('header.php');
    include('propertySort.php');
    include('footer.php');
    break;
  case 'fix':
    include('header.php');
    include('fix.php');
    include('footer.php');
    break;
  case 'change':
    include('header.php');
    include('change.php');
    include('footer.php');
    break;
  case 'const':
    include('header.php');
    include('const.php');
    include('footer.php');
    break;
  case 'setting':
    include('header.php');
    include('setting.php');
    include('footer.php');
    break;
}

 ?>
