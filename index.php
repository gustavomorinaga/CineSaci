<?php
include_once "./components/Navbar/index.php";
echo Navbar("./", "Home");
?>

<script>
	document.querySelectorAll('.nav-item')[0].classList.add('active');
</script>

<main>
	<section class="main-banner"></section>

	<div class="container main-content">
		<div class="row">
			<div class="tab-content col-sm-9">
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
					echo Abas(
						"AbaNoticias",
						AbasItem(
							"./images/tropa_de_elite_thumb.jpg", 
							"Miniatura Tropa de Elite", 
							"24 de Janeiro de 2077", 
							"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati tempora suscipit asperiores vero? Qui dolores repellat voluptatum vero ad voluptatibus tempora est, nisi inventore facere quo debitis praesentium cum non?"
						),
						AbasItem(
							"./images/carandiru_thumb.jpg", 
							"Miniatura Tropa de Elite", 
							"24 de Janeiro de 2077", 
							"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati tempora suscipit asperiores vero? Qui dolores repellat voluptatum vero ad voluptatibus tempora est, nisi inventore facere quo debitis praesentium cum non?"
						),
						AbasItem(
							"./images/doutrinador_thumb.jpg", 
							"Miniatura Tropa de Elite", 
							"24 de Janeiro de 2077", 
							"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati tempora suscipit asperiores vero? Qui dolores repellat voluptatum vero ad voluptatibus tempora est, nisi inventore facere quo debitis praesentium cum non?"
					),
						true
					);

					echo Abas(
						"AbaLancamentos",
						AbasItem(
							"./images/carandiru_thumb.jpg", 
							"Miniatura Tropa de Elite", 
							"24 de Janeiro de 2077", 
							"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati tempora suscipit asperiores vero? Qui dolores repellat voluptatum vero ad voluptatibus tempora est, nisi inventore facere quo debitis praesentium cum non?"
						),
						AbasItem(
							"./images/tropa_de_elite_thumb.jpg", 
							"Miniatura Tropa de Elite", 
							"24 de Janeiro de 2077", 
							"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati tempora suscipit asperiores vero? Qui dolores repellat voluptatum vero ad voluptatibus tempora est, nisi inventore facere quo debitis praesentium cum non?"
						),
						AbasItem(
							"./images/doutrinador_thumb.jpg", 
							"Miniatura Tropa de Elite", 
							"24 de Janeiro de 2077", 
							"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati tempora suscipit asperiores vero? Qui dolores repellat voluptatum vero ad voluptatibus tempora est, nisi inventore facere quo debitis praesentium cum non?"
					),
						false
					);
					?>
			</div>

			<?php
			include_once "./components/EmBreve/index.php";
			echo EmBreve("-3.8rem");
			?>

		</div>
		<div class="row trailers-content">
			<div class="col-sm-12">
				<h2>TRAILERS</h2>
				<div class="row">
					<div class="col-sm-6">
						<img src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="" />
					</div>

					<div class="col-sm-6">

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

					</div>
				</div>
			</div>
		</div>

		<?php
		include_once "./components/Noticias/index.php";
		echo Noticias();
		?>

	</div>

</main>

<?php
include_once "./components/Footer/index.php";
echo Footer("./");
?>
