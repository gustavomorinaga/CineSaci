<?php
include_once "../../components/Navbar/index.php";
echo Navbar("../../", "Ação");
?>

<script>
	document.querySelectorAll('.nav-item')[3].classList.add('active');
</script>

<main>

	<div class="container">
		<h1>Ação</h1>
		<?php
		include_once "../../components/Noticias/index.php";
		echo Noticias();
		?>
	</div>

</main>

<?php
include_once "../../components/Footer/index.php";
echo Footer("../../");
?>
