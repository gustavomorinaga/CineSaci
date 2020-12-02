<?php
include_once "../../components/Navbar/index.php";
echo Navbar("../../", "Drama");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>
	<section class="container">
		<h1>Drama</h1>
		<?php
		include_once "../../components/Noticias/index.php";
		echo Noticias('../../');
		?>
	</section>

</main>

<?php
include_once "../../components/Footer/index.php";
echo Footer("../../");
?>
