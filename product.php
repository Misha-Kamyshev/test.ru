<?php

	require 'php/connect.php';

	$proudct_id = $_GET['product_id'];
	if (!is_numeric($proudct_id)) exit();
	$result = mysqli_query($BD, "SELECT * FROM `brand` WHERE id = ".$proudct_id);
	$product = mysqli_fetch_assoc($result);

	$title = 'Коондиционер '.$product['name'];
	require 'php/_header.php';
?>

<section>

	<div class="conteiner">

		<div class="title">
			
		</div>

		<div class="block_main">

			<div>
				<script type="text/javascript">
				    var images = new Array();
				    var i = 0;
				     
				    images[0] = 'images/product_1.1.jpg';
				    images[1] = 'images/product_1.2.jpg';
				    images[2] = 'images/product_2.1.jpg';
				     
				    function viewImages() {
				        document.getElementById("img_main").src = images[i]; 
				        i++;
				        if (i == images.length) {
				            i = 0;
				        }
				        setTimeout("viewImages()",5000);
				    }   
				</script>
				 
				<img src="" id="img_main">
				 
				<script> viewImages(); </script>
			</div>

			<h1><?echo 'Коондиционер '.$product['brand_id'].' '.$product['name']?></h1>
		</div>
	</div>
</section>