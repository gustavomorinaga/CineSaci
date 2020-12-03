<?php
include_once "./components/Navbar/index.php";
echo Navbar("./", "Home");
?>

<script>
	document.querySelectorAll('.nav-item')[0].classList.add('active');
</script>

<main>
	<section class="main-banner">
		<span class="banner-text">
			<h1>CineSaci</h1>
			<h2>O Portal dos Filmes Brasileiros</h2>
		</span>
	</section>

	<section class="container main-content">
		<section class="row">
			<article class="tab-content col-sm-9">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link active" href="#AbaNoticias" data-toggle="tab">Notícias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#AbaLancamentos" data-toggle="tab">Lançamentos</a>
					</li>
				</ul>
				<?php
				include_once "./components/Abas/index.php";

				$json = file_get_contents('./database/data.json');
				$filmes = json_decode($json);

				echo Abas(
					"AbaNoticias",
					AbasItem(
						$filmes->filmes[0]->thumb,
						$filmes->filmes[0]->pagina->titulo,
						$filmes->filmes[0]->data,
						$filmes->filmes[0]->descricao,
						'./pages/categoria/acao/doutrinador.php'
					),
					AbasItem(
						$filmes->filmes[1]->thumb,
						$filmes->filmes[1]->pagina->titulo,
						$filmes->filmes[1]->data,
						$filmes->filmes[1]->descricao,
						'./pages/categoria/acao/tropaDeElite.php'
					),
					AbasItem(
						$filmes->filmes[4]->thumb,
						$filmes->filmes[4]->pagina->titulo,
						$filmes->filmes[4]->data,
						$filmes->filmes[4]->descricao,
						'./pages/categoria/drama/carandiru.php'
					),
					true
				);

				echo Abas(
					"AbaLancamentos",
					AbasItem(
						$filmes->filmes[2]->thumb,
						$filmes->filmes[2]->pagina->titulo,
						$filmes->filmes[2]->data,
						$filmes->filmes[2]->descricao,
						'./pages/categoria/comedia/autoDaCompadecida.php'
					),
					AbasItem(
						$filmes->filmes[5]->thumb,
						$filmes->filmes[5]->pagina->titulo,
						$filmes->filmes[5]->data,
						$filmes->filmes[5]->descricao,
						'./pages/categoria/drama/cidadeDeDeus.php'
					),
					AbasItem(
						$filmes->filmes[3]->thumb,
						$filmes->filmes[3]->pagina->titulo,
						$filmes->filmes[3]->data,
						$filmes->filmes[3]->descricao,
						'./pages/categoria/comedia/cro.php'
					),
					false
				);
				?>
			</article>

			<?php
			include_once "./components/EmBreve/index.php";
			echo EmBreve('./', "-3.8rem");
			?>

		</section>
		<section class="row trailers-content">

			<h2>TRAILERS</h2>
			<section class="row">
				<article class="col-sm-6">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/uZBiNJQxtGw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</article>

				<aside class="col-sm-6">

					<?php
					include_once "./components/TrailerItem/index.php";
					echo TrailerItem("./images/ate-que-a-sorte-nos-separe.jpg", "Alguma coisa", "Filme", "Tino é um pai de família que tem sua rotina transformada ao ganhar na loteria. Em dez anos, o fanfarrão e sua mulher Jane gastam todo o dinheiro com uma vida de ostentação.");
					echo TrailerItem("./images/touro-ferdinando.jpg", "Alguma coisa", "Filme", "Ferdinando é um touro com um temperamento calmo e tranquilo, que prefere sentar-se embaixo de uma árvore e relaxar ao invés de correr por aí bufando e batendo cabeça com os outros.");
					echo TrailerItem("./images/sos-mulheres-ao-mar.jpg", "Alguma coisa", "Filme", "S.O.S. Mulheres Ao Mar acompanha Adriana (Giovanna Antonelli) que não está em um bom momento na vida. Ela não consegue que alguma editora publique seus livros e, para ganhar a vida, legenda filmes pornôs.");
					?>

				</aside>
			</section>
		</section>

		<?php
		include_once "./components/Noticias/index.php";
		echo Noticias('./');
		?>

	</section>

</main>

<?php
include_once "./components/Footer/index.php";
echo Footer("./");
?>
