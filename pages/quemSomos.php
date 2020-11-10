<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Quem Somos");
?>

<script>
	document.querySelectorAll('.nav-item')[4].classList.add('active');
</script>

<main>

	<div class="container about-content">
		<h1>QUEM SOMOS</h1>
		<div class="row content">
			<div class="col-sm-12">
				<h2>Equipe Criativa</h2>
			</div>
		</div>
		
		<?php
		include_once "../components/Aluno/index.php";
		echo Aluno(
			"https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
			"Aluno",
			"Nome do aluno",
			"Programador",
			"123.456.789-0",
			"Front-End",
			"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi accusantium vitae doloribus exercitationem aliquam tempora, blanditiis quasi amet voluptatibus non soluta? Quaerat laudantium placeat inventore blanditiis cupiditate doloremque labore culpa?"
		);
		?>
		
		<?php
		include_once "../components/Aluno/index.php";
		echo Aluno(
			"https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
			"Aluno",
			"Nome do aluno",
			"Programador",
			"123.456.789-0",
			"Front-End",
			"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi accusantium vitae doloribus exercitationem aliquam tempora, blanditiis quasi amet voluptatibus non soluta? Quaerat laudantium placeat inventore blanditiis cupiditate doloremque labore culpa?"
		);

		?>
		<?php
		include_once "../components/Aluno/index.php";
		echo Aluno(
			"https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
			"Aluno",
			"Nome do aluno",
			"Programador",
			"123.456.789-0",
			"Front-End",
			"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi accusantium vitae doloribus exercitationem aliquam tempora, blanditiis quasi amet voluptatibus non soluta? Quaerat laudantium placeat inventore blanditiis cupiditate doloremque labore culpa?"
		);
		?>

</main>

<?php
include_once "../components/Footer/index.php";
echo Footer("../");
?>
