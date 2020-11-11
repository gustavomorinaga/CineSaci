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
			"https://avatars2.githubusercontent.com/u/47375774?s=460&u=ef52a254372ddcc6c7b17dfce63a087bbad14e0e&v=4",
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
			"https://avatars0.githubusercontent.com/u/54083619?s=460&v=4",
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
			"https://avatars1.githubusercontent.com/u/72390868?s=460&u=9ec7c23a483ceb8275a736b3a2f500d6c6d0aca3&v=4",
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
