<?php
include 'ChromePhp.php';
session_start();
if (!$_SESSION['userId']) {
  header("Location: /river/");
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>水利署第六河川局</title>
    <!-- Main CSS-->
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="static/vendor/fontawesome-free/css/all.min.css">
    <link rel="icon" href="static/images/logoIcon.png">
    <link rel="stylesheet" href="static/vendor/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="static/vendor/jquery-confirm/jquery-confirm.css">
    <link rel="stylesheet" href="static/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/main2.css">
</head>
<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="#">
            <img src="static/images/logo.png" style="width:40px;margin-top:-5px;margin-bottom: 5px;"> 水利署第六河川局
        </a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
    	    <li><a class="app-nav__item" href="">109年度</a></li>
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href=""><i class="fa fa-user fa-lg"></i> 設定</a></li>
                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> 登出</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">

            <img class="app-sidebar__user-avatar" src="static/images/logo.png" alt="User Image" width="50">
            <div>
                <p class="app-sidebar__user-name"></p>
                <p class="app-sidebar__user-designation"></p>
            </div>
        </div>
        <ul class="app-menu">
            <!--
            <li>
                <a class="app-menu__item" id="home" href="?page=data">
                    <i class="app-menu__icon fa fa-tachometer-alt""></i>
                    <span class="app-menu__label">主頁</span>
                </a>
            </li>
            -->
    	    <li>
                <a class="app-menu__item" id="mileage" href="/river/mileage.php">
                    <i class="app-menu__icon fa fa-info-circle"></i>
                    <span class="app-menu__label">里程資訊管理</span>
                </a>
    	    </li>
            <li>
                <a class="treeview-item" id="propertyIM" href="/river/propertyIM.php">
                    <i class="icon fa fa-book" id="propertyIMicon"></i>
                    財產資訊管理
                </a>
            </li>
    	    <li>
                <a class="app-menu__item" id="fix" href="/river/fix.php">
                    <i class="app-menu__icon fa fa-file"></i>
                    <span class="app-menu__label">維護巡查歷程管理</span>
                </a>
            </li>
    	    <li>
                <a class="app-menu__item" id="change" href="/river/change.php">
                    <i class="app-menu__icon fa fa-folder-open"></i>
                    <span class="app-menu__label">移交工程資料管理</span>
                </a>
            </li>
    	    <li>
                <a class="app-menu__item" id="const" href="/river/const.php">
                    <i class="app-menu__icon fa fa-list-ul"></i>
                    <span class="app-menu__label">河川工地使用管理</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" id="setting" href="/river/setting.php">
                    <i class="app-menu__icon fa fa-cog"></i>
                    <span class="app-menu__label">帳號管理</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="app-content">
