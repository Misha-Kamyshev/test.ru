<?php
	require_once '../php/connect.php';

	$daichi = mysqli_query($BD, "SELECT * FROM `daichi`");
	$axioma = mysqli_query($BD, "SELECT * FROM `axioma`");
	$bosch  = mysqli_query($BD, "SELECT * FROM `bosch`");
	$kentatsu = mysqli_query($BD, "SELECT * FROM `kentatsu`");
	$midea  = mysqli_query($BD, "SELECT * FROM `midea`");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог СКД24/7</title>
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/section/shop.css">
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
				<h1>Каталог кондиционеров</h1>
			</div>

			<div class="block_main">

				<div class="block_left">

					<div class="PC">
						<h3>Бренды</h3>
						<ul>
							<li> <a href="#DAICHI">&#176;DAICHI</a> </li>
							<li> <a href="#AXIOMA">Axioma</a> </li>
							<li> <a href="#KENTATSU">Kentatsu</a> </li>
							<li> <a href="#BOSCH">BOSCH</a> </li>
							<li> <a href="#MIDEA">Midea</a> </li>
						</ul>
					</div>
				</div>
					

				<div class="block_right">

				<!-- Кнопка "Бренды" -->
					<div class="mobile">

						<button onclick="mFunction()" class="brand">Бренды</button> 
						<div id="myDropdown_2" class="brand-links">
							<a href="#DAICHI">&#176;DAICHI</a>
							<a href="#AXIOMA">Axioma</a>
							<a href="#KENTATSU">Kentatsu</a>
							<a href="#BOSCH">BOSCH</a>
							<a href="#MIDEA">Midea</a>
						</div>
					</div>
				

				<!-- Daichi -->
					<div class="DAICHI">

						<div class="firm">
							<div id="DAICHI">
								<h2>&#176;DAICHI</h2>
							</div>
						</div>
					
						<?php 
							while($model_1 = mysqli_fetch_assoc($daichi))
							{
								?>
								<div class="product">
	 								<a href="<?php echo $model_1['link'] ?>"> 
	 									<img src="<?php echo $model_1['image'] ?>">
										<h1><?php echo $model_1['name'] ?></h1>
										<h2>Цена: <?php echo $model_1['price'] ?></h2>
									</a>
								</div>
								<?php 
							}
						?>
					</div>

				<!-- Axioma -->
					<div class="AXIOMA">

						<div class="firm">
							<div id="AXIOMA">
								<h2>AXIOMA</h2>
							</div>
						</div>

						<?php 
							while($model_2 = mysqli_fetch_assoc($axioma)) 
							{
								?>
								<div class="product">
	 								<a href="<?php echo $model_2['link'] ?>"> 
	 									<img src="<?php echo $model_2['image'] ?>">
										<h1><?php echo $model_2['name'] ?></h1>
										<h2>Цена: <?php echo $model_2['price'] ?></h2>
									</a>
								</div>
								<?php
							}
						?>
					</div>

				<!-- BOSCH -->
					<div class="BOSCH">

						<div class="firm">
							<div id="BOSCH">
								<h2>BOSCH</h2>
							</div>
						</div>

						<?php 
							while($model_4 = mysqli_fetch_assoc($bosch)) 
							{
								?>
								<div class="product">
	 								<a href="<?php echo $model_4['link'] ?>"> 
	 									<img src="<?php echo $model_4['image'] ?>">
										<h1><?php echo $model_4['name'] ?></h1>
										<h2>Цена: <?php echo $model_4['price'] ?></h2>
									</a>
								</div>
								<?php
							}
						?>
					</div>

				<!-- Kentatsu -->
					<div class="KENTATSU">

						<div class="firm">
							<div id="KENTATSU">
								<h2>KENTATSU</h2>
							</div>
						</div>

						<?php 
							while($model_3 = mysqli_fetch_assoc($kentatsu)) 
							{
								?>
								<div class="product">
	 								<a href="<?php echo $model_3['link'] ?>"> 
	 									<img src="<?php echo $model_3['image'] ?>">
										<h1><?php echo $model_3['name'] ?></h1>
										<h2>Цена: <?php echo $model_3['price'] ?></h2>
									</a>
								</div>
								<?php
							}
						?>
					</div>

				<!-- Midea -->
					<div class="MIDEA">

						<div class="firm">
							<div id="MIDEA">
								<h2>MIDEA</h2>
							</div>
						</div>

						<?php 
							while($model_5 = mysqli_fetch_assoc($midea)) 
							{
								?>
								<div class="product">
	 								<a href="<?php echo $model_5['link'] ?>"> 
	 									<img src="<?php echo $model_5['image'] ?>">
										<h1><?php echo $model_5['name'] ?></h1>
										<h2>Цена: <?php echo $model_5['price'] ?></h2>
									</a>
								</div>
								<?php
							}
						?>
					</div>
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
  function mFunction() {
      document.getElementById("myDropdown_2").classList.toggle("show");
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

    if (!event.target.matches('.brand')) {
      var dropdowns = document.getElementsByClassName("brand-links");
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