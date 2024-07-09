<?php

	require 'php/connect.php';
	
	$proudct_id = $_GET['product_id'];
	// $product_class = $_GET['product_class'];
	if (!is_numeric($proudct_id)/* or !is_numeric($product_class)*/) exit();
	$result = mysqli_query($BD, "SELECT * FROM `brand` WHERE id = ".$proudct_id);
	$product = mysqli_fetch_assoc($result);
	
	$title = 'Коондиционер '.$product['name'];
	require 'php/_header.php';
?>

<section>

	<div class="conteiner">

		<div class="title">
			<h1><?echo 'Коондиционер '.$product['brand_id'].' '.$product['name']?></h1>
		</div>


		<div class="block_main">

			<input type="button" onclick="history.back();" value="Назад"/ class="button_back">

			<div class="block_slider">
				<a class="previous" onclick="previousSlide()">&#10094;</a>
					<a class="next" onclick="nextSlide()">&#10095;</a>
				<div class="slider">
					<div class="item">
						<img class="img_big" src="<?echo $product['image'];?>">
					</div>

					<div class="item">
						<img class="img_big" src="<?echo $product['image_1'];?>">
					</div>

					<div class="item">
						<img class="img_big" src="<?echo $product['image_2'];?>">
					</div>

					<div class="item">
						<img class="img_big" src="<?echo $product['image_3'];?>">
					</div>
				</div>
			</div>

			<div class="button_power">

				<p>Для помещения площадью, м<sup>2</sup></p>

				<button onclick="mFunction_2()" class="power_links"><?echo $product['power'];?></button> 
				<div id="links_power" class="power">
					<?php 
						if ($product_class == 1) {
							while($class = mysqli_fetch_assoc($class_1)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 2) {
							while($class = mysqli_fetch_assoc($class_2)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 3) {
							while($class = mysqli_fetch_assoc($class_3)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 4) {
							while($class = mysqli_fetch_assoc($class_4)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 5) {
							while($class = mysqli_fetch_assoc($class_5)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 6) {
							while($class = mysqli_fetch_assoc($class_6)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 7) {
							while($class = mysqli_fetch_assoc($class_7)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 8) {
							while($class = mysqli_fetch_assoc($class_8)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
						if ($product_class == 9) {
							while($class = mysqli_fetch_assoc($class_9)) {
								?>
								<a href="<?echo $class['link']?>"><?echo $class['power']?></a>
								<?php
							}
						}
					?>
				</div>
			</div>

			<div class="price">
				<?php 
					echo 'Цена: '.$product['price'].' руб.';
				?>
			</div>

		</div>
	</div>
</section>


<script>
	/* Устанавливаем стартовый индекс слайда по умолчанию: */
	let slideIndex = 1;
	/* Вызываем функцию, которая реализована ниже: */
	showSlides(slideIndex);

	/* Увеличиваем индекс на 1 — показываем следующий слайд: */
	function nextSlide() {
	    showSlides(slideIndex += 1);
	}

	/* Уменьшаем индекс на 1 — показываем предыдущий слайд: */
	function previousSlide() {
	    showSlides(slideIndex -= 1);  
	}

	/* Устанавливаем текущий слайд: */
	function currentSlide(n) {
	    showSlides(slideIndex = n);
	}

	/* Функция перелистывания: */
	function showSlides(n) {
	    /* Обращаемся к элементам с названием класса "item", то есть к картинкам: */
	    let slides = document.getElementsByClassName("item");
	    
	    /* Проверяем количество слайдов: */
	    if (n > slides.length) {
	      slideIndex = 1
	    }
	    if (n < 1) {
	        slideIndex = slides.length
	    }
	  
	    /* Проходим по каждому слайду в цикле for: */
	    for (let slide of slides) {
	        slide.style.display = "none";
	    }
	    /* Делаем элемент блочным: */
	    slides[slideIndex - 1].style.display = "block";    
	}
</script>

<script>
  function mFunction_2() {
      document.getElementById("links_power").classList.toggle("show");
  }

  window.addEventListener("click", function(event) {
    if (!event.target.matches('.power')) {
      var dropdowns = document.getElementsByClassName("power_links");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  });
</script>