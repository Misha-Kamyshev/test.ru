<!DOCTYPE html>
<html>
<head>
<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
</head>
<body>

    <header>

        <div class="logo">
            <a href="index.php">
                <div>
                    <p>СКД 24/7</p>
                </div>
            </a>
        </div>

        <div class="links">
            <ul>
                <div>
                    <li class="shop"> <a href="bron.php">БРОНИРОВАНИЕ</a> </li>
                    <li class="shop"> <a href="shop.php">ЦЕНЫ</a> </li>
                    <li> <a href="about.php">О НАС</a> </li>
                    <li> <a href="index.php">ГЛАВНАЯ</a> </li>
                </div>
            </ul>
        </div>

        <div class="dropdown">

            <button onclick="myFunction()" class="dropbtn">Меню</button>

            <div id="myDropdown" class="dropdown-links">
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="shop.php">Цены</a>
                <a href="bron.php">Бронирование</a>
            </div>
        </div>
    </header>