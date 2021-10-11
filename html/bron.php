<!-- <?php 

	require_once '../php/connect_2.php';

	
?> -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Бронь СКД 24/7</title>
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/section/bron.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body>
	<header>

		<div class="logo">
			<a href="../index.html">
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
					<li> <a href="about.html">О НАС</a> </li>
					<li> <a href="../index.html">ГЛАВНАЯ</a> </li>
				</div>
			</ul>
		</div>


		<!-- Кнопка "Меню" -->
		<div class="dropdown">

			<button onclick="myFunction()" class="dropbtn">Меню</button>

			<div id="myDropdown" class="dropdown-links">
				<a href="../index.html">Главная</a>
				<a href="about.html">О нас</a>
				<a href="shop.php">Цены</a>
				<a href="bron.php">Бронирование</a>
			</div>
		</div>
	</header>



	<section>

		<div class="conteiner">
		
			<div class="title">
				<h1>Бронирование выезда замерщика</h1>
			</div>

			<div class="block_main">



				<div class="block_right">
					
					<h1>План нашей работы</h1>

					<ol class="plan">
						<li>Осмотр места устоновки</li>
						<li>Определение марки и мощьности кондиционера</li>
						<li>Расчет скоимости (кондиционер + монтаж + расходный материал)</li>
						<li>Выдача счета на оплату этой суммы</li>
					</ol>
				</div>



				<div class="block_left">

					<!-- <div class="form">

						<form action="../php/form.php" method="post" class="bron">

							<div>
								<label>Имя</label>
								<input type="text" name="name" placeholder="Введите имя">
							</div>

							<div>	
								<label>Фамилия</label>
								<input type="text" name="secondname" placeholder="Введите фамилию">
							</div>

							<div>	
								<label>Номер телефона</label>
								<input type="text" name="phone" placeholder="+7 999 999 99 99">
							</div>

							<div>	
								<label>E-mail</label>
								<input type="text" name="email" placeholder="E-mail@gmail.com">
							</div>

							<div>	
								<label>Адрес</label>
								<input type="text" name="address" placeholder="Введите адрес">
							</div>

							<div>	
								<label>Время</label>
								<input type="time" name="time" placeholder="Введите дату">
							</div>

							<div>	
								<label>Дата</label>
								<input type="date" name="data" placeholder="Введите дату">
							</div>


							<input type="submit" value="Отправить" class="button">
						</form>
					</div> -->
				</div>
			</div>
		</div>
	</section>


	<footer>
		
		<div class="conteiner">

			<div class="block_links">

				<ul>
					<li> <a href="../index.html">ГЛАВНАЯ</a> </li>
					<li> <a href="about.html">О НАС</a> </li>
					<li> <a href="shop.php">ЦЕНЫ</a> </li>
					<li> <a href="bron.php" id="BRON">БРОНИРОВАНИЕ</a> </li>
				</ul>
			</div>

			<div class="block_about">

				<h1>О нас</h1>
				<p>
					Тел. +7 999 999 99 99 <br />
					Адрес: г.Хабаровск ул.Ленина д.** офис ***
				</p>
			</div>
		</div>
	</footer>


<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-links");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>
</body>
</html>