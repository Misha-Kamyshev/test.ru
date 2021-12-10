<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">

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
            <div>
                <ul>
                    <li class="shop"> <a href="bron.php">БРОНИРОВАНИЕ</a> </li>
                    <li class="shop"> <a href="shop.php">КАТАЛОГ</a> </li>
                    <li> <a href="about.php">О НАС</a> </li>
                    <li> <a href="index.php">ГЛАВНАЯ</a> </li>
                </ul>
            </div>
        </div>

        <div class="dropdown">

            <button onclick="myFunction()" class="dropbtn">Меню</button>

            <div id="myDropdown" class="dropdown-links">
                <a href="index.php">Главная</a>
                <a href="about.php">О нас</a>
                <a href="shop.php">Каталог</a>
                <a href="bron.php">Бронирование</a>
            </div>
        </div>
    </header>