<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>个人中心-支付成功页</title>
    <link rel="shortcut icon" href="images/yiyi_logo.png">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/amazeui.css" rel="stylesheet" type="text/css">
    <link href="css/innerpage.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/always.css">
    <link rel="stylesheet" href="css/minified.css">
    <link href="css/personal.css" rel="stylesheet" type="text/css">
    <link href="css/addstyle.css" rel="stylesheet" type="text/css">
    <link href="css/orstyle.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/amazeui.js"></script>
    <script>
        window.onload = function(){
            var nowTime = new Date();
            var year = nowTime.getFullYear();
            var month = nowTime.getMonth()+1;
            var date = nowTime.getDate();
            var day = nowTime.getDay();
            var now_span = document.querySelector("#nowTime");
            switch (day) {
                case 1:
                    day = "星期一";
                    break;
                case 2:
                    day = "星期二";
                    break;
                case 3:
                    day = "星期三";
                    break;
                case 4:
                    day = "星期四";
                    break;
                case 5:
                    day = "星期五";
                    break;
                case 6:
                    day = "星期六";
                    break;
                default:
                    day = "星期日";
                    break;
            }
            now_span.innerHTML = year+"年"+month+"月"+date+"日"+day;
        }

    </script>
</head>

<body>
<!--头 -->
<header id="site-header" role="banner">
    <!-- HEADER TOP -->
    <?php
    require './header.php';
    ?>
    <!-- // HEADER TOP -->
    <!-- MAIN HEADER -->
    <div class="main-header-wrapper">
        <div class="container">
            <div class="main-header">
                <!-- // CURRENCY / LANGUAGE / USER MENU -->
                <!-- SITE LOGO -->
                <div class="logo-wrapper">
                    <a href="index.php" class="logo" >
                        <img src="img/logo.png" title="衣衣不舍电商网站" />
                    </a>
                </div>
                <!-- // SITE LOGO -->
                <!-- SITE NAVIGATION MENU -->
                <nav id="site-menu" role="navigation">
                    <ul class="main-menu hidden-sm hidden-xs">
                        <li class="active">
                            <a href="index.php">主页</a>
                        </li>
                        <li>
                            <a href="index.php">产品</a>
                        </li>
                        <li>
                            <a href="store_location.php">店铺位置</a>
                        </li>
                        <li>
                            <a href="person_center.php">个人中心</a>
                        </li>
                        <li>
                            <a href="suggest.php">联系我们</a>
                        </li>
                    </ul>
                </nav>
                <!-- // SITE NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- // MAIN HEADER -->
</header>
<div class="breadcrumb-container">
    <div class="container">
        <div class="relative">
            <ul class="bc unstyled clearfix">
                <li><a href="index.php">主页</a></li>
                <li><a href="person_center.php">个人中心</a></li>
                <li class="active">支付页</li>
            </ul>
        </div>
    </div>
</div>

<div class="center">
    <div class="col-main">
        <div class="main-wrap">
            <h2 class="ok">支付成功啦！</h2>
            <img src="img/logo1.jpg" alt="" style="height: 380px;width: 400px;margin: 20px 0 0 300px;">

        </div>
        <!--底部-->

    </div>

    <aside class="menu">
        <ul>
            <li class="person active">
                <a href="person_center.php">个人中心</a>
            </li>
            <li class="person">
                <p>个人资料</p>
                <ul>
                    <li> <a href="person_message.php">个人信息</a></li>
                    <li> <a href="address.php">地址管理</a></li>
                </ul>
            </li>
            <li class="person">
                <p>我的交易</p>
                <ul>
                    <li><a href="order.php">订单管理</a></li>
                </ul>
            </li>
            <li class="person">
                <p>我的收藏</p>
                <ul>
                    <li> <a href="collect.php">收藏</a></li>
                </ul>
            </li>

            <li class="person">
                <p>在线客服</p>
                <ul>
                    <li> <a href="suggest.php">意见反馈</a></li>
                </ul>
            </li>
        </ul>


    </aside>
</div>
<?php
require './footer.php';
?>
</body>

</html>
<script src="js/user.js"></script>