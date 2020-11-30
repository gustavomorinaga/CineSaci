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
			<h1>Olá mundo!</h1>
			<h2>Breve descrição</h2>
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
						$filmes->filmes[0]->descricao
					),
					AbasItem(
						$filmes->filmes[1]->thumb,
						$filmes->filmes[1]->pagina->titulo,
						$filmes->filmes[1]->data,
						$filmes->filmes[1]->descricao
					),
					AbasItem(
						$filmes->filmes[4]->thumb,
						$filmes->filmes[4]->pagina->titulo,
						$filmes->filmes[4]->data,
						$filmes->filmes[4]->descricao
					),
					true
				);

				echo Abas(
					"AbaLancamentos",
					AbasItem(
						$filmes->filmes[4]->thumb,
						$filmes->filmes[4]->pagina->titulo,
						$filmes->filmes[4]->data,
						$filmes->filmes[4]->descricao
					),
					AbasItem(
						$filmes->filmes[1]->thumb,
						$filmes->filmes[1]->pagina->titulo,
						$filmes->filmes[1]->data,
						$filmes->filmes[1]->descricao
					),
					AbasItem(
						$filmes->filmes[0]->thumb,
						$filmes->filmes[0]->pagina->titulo,
						$filmes->filmes[0]->data,
						$filmes->filmes[0]->descricao
					),
					false
				);
				?>
			</article>

			<?php
			include_once "./components/EmBreve/index.php";
			echo EmBreve("-3.8rem");
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
					echo TrailerItem("https://hyperflix.vercel.app/static/media/Logo.632cc64b.png", "Alguma coisa", "Filme", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsam sit ducimus exercitationem
							accusamus velit laborum veniam corporis laboriosam fuga dicta consectetur fugit voluptatibus qui
							error harum delectus, culpa quis!");
					echo TrailerItem("https://hyperflix.vercel.app/static/media/Logo.632cc64b.png", "Alguma coisa", "Filme", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsam sit ducimus exercitationem
							accusamus velit laborum veniam corporis laboriosam fuga dicta consectetur fugit voluptatibus qui
							error harum delectus, culpa quis!");
					echo TrailerItem("https://hyperflix.vercel.app/static/media/Logo.632cc64b.png", "Alguma coisa", "Filme", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsam sit ducimus exercitationem
							accusamus velit laborum veniam corporis laboriosam fuga dicta consectetur fugit voluptatibus qui
							error harum delectus, culpa quis!");
					?>

				</aside>
			</section>
		</section>

		<?php
		include_once "./components/Noticias/index.php";
		echo Noticias();
		?>

	</section>

</main>

<?php
include_once "./components/Footer/index.php";
echo Footer("./");
?>
