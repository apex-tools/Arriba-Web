<!--
 * Created by PhpStorm.
 * User: Arseny
 * Date: 08.02.2016
 * Time: 12:37
-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Arriba</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header>
    <div class="left-group">
        <div class="menu-trigger">
            <svg viewBox="0 0 36 36" height="36" width="36" id="main_trigger"></svg>
        </div>
        <a href="/" class="logo">
            <svg viewBox="0 0 160 36" height="36" width="160" id="main_logo"></svg>
        </a>
    </div>
    <div class="cta">
        <!--<a href="mailto:info@ca-arriba.ru" class="dlink">info@ca-arriba.ru</a>-->
        <a class="dlink" onclick="$('.call-form').slideToggle(100)">(812) 385-56-23</a>
        <!--<a href="#" class="main-btn"><span class="hidden-xs">Сделать заказ</span><span class="visible-xs">Заказать</span></a>-->
        <div class="call-form">
            <label class="max">
                <small>Имя</small>
                <input type="text" class="max" placeholder="Как к Вам обращаться?"/>
            </label>
            <label class="max">
                <small>Телефон</small>
                <input type="text" class="max" placeholder="Укажите Ваш номер для связи"/>
            </label>
            <div class="text-center">
                <small><small>Мы не предоставляем информацию третьим лицам</small></small>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-success">Позвоните мне</a>
            </div>
        </div>
    </div>
</header>
<!-- Header -->