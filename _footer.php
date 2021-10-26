<footer>
	
	<div class="conteiner">
		<div class="block_links">
			<ul>
				<li> <a href="index.php">ГЛАВНАЯ</a> </li>
				<li> <a href="about.php">О НАС</a> </li>
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
    window.addEventListener("click", function(event) {
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
    });
</script>
</body>
</html>