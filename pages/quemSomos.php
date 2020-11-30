<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Quem Somos");
?>

<script>
	document.querySelectorAll('.nav-item')[4].classList.add('active');
</script>

<main>

	<section class="container about-content">
		<h1>QUEM SOMOS</h1>
		<section class="row content">
			<article class="col-sm-12">
				<h2>Equipe Criativa</h2>
			</article>
		</section>
		
		<?php
		include_once "../components/Aluno/index.php";

		$json = file_get_contents('../database/data.json');
		$alunos = json_decode($json);

		echo Aluno(
			$alunos->alunos[0]->avatar,
			$alunos->alunos[0]->nome,
			$alunos->alunos[0]->nome,
			$alunos->alunos[0]->cargo,
			$alunos->alunos[0]->ra,
			$alunos->alunos[0]->area,
			$alunos->alunos[0]->bio
		);

		echo Aluno(
			$alunos->alunos[1]->avatar,
			$alunos->alunos[1]->nome,
			$alunos->alunos[1]->nome,
			$alunos->alunos[1]->cargo,
			$alunos->alunos[1]->ra,
			$alunos->alunos[1]->area,
			$alunos->alunos[1]->bio
		);

		echo Aluno(
			$alunos->alunos[2]->avatar,
			$alunos->alunos[2]->nome,
			$alunos->alunos[2]->nome,
			$alunos->alunos[2]->cargo,
			$alunos->alunos[2]->ra,
			$alunos->alunos[2]->area,
			$alunos->alunos[2]->bio
		);

		echo Aluno(
			$alunos->alunos[3]->avatar,
			$alunos->alunos[3]->nome,
			$alunos->alunos[3]->nome,
			$alunos->alunos[3]->cargo,
			$alunos->alunos[3]->ra,
			$alunos->alunos[3]->area,
			$alunos->alunos[3]->bio
		);

		echo Aluno(
			$alunos->alunos[4]->avatar,
			$alunos->alunos[4]->nome,
			$alunos->alunos[4]->nome,
			$alunos->alunos[4]->cargo,
			$alunos->alunos[4]->ra,
			$alunos->alunos[4]->area,
			$alunos->alunos[4]->bio
		);

		echo Aluno(
			$alunos->alunos[5]->avatar,
			$alunos->alunos[5]->nome,
			$alunos->alunos[5]->nome,
			$alunos->alunos[5]->cargo,
			$alunos->alunos[5]->ra,
			$alunos->alunos[5]->area,
			$alunos->alunos[5]->bio
		);
		?>

</main>

<?php
include_once "../components/Footer/index.php";
echo Footer("../");
?>
