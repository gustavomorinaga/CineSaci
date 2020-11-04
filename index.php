<?php
include_once "./components/Navbar/index.php";
echo Navbar("./");
?>

<script>
	document.querySelectorAll('.nav-item')[0].classList.add('active');
</script>

<main>
	<section class="main-banner"></section>

	<div class="container main-content">
		<div class="row">
			<div class="tab-content col-sm-9">
				<div class="row">
					<div class="col-sm-4">
						<div class="card" style="width: 18rem">
							<img src="./images/doutrinador_thumb.jpg" alt="Miniatura Doutrinador" />
							<div class="news-description">
								<div class="new">Novo</div>
								<caption>
									24 de Janeiro de 2077
								</caption>
							</div>
							<div class="card-body">
								<p class="card-text">
									Some quick example text to build on the card title and
									make up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="width: 18rem">
							<img src="./images/tropa_de_elite_thumb.jpg" alt="Miniatura Tropa de Elite" />
							<div class="news-description">
								<div class="new">Novo</div>
								<caption>
									24 de Janeiro de 2077
								</caption>
							</div>
							<div class="card-body">
								<p class="card-text">
									Some quick example text to build on the card title and
									make up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card" style="width: 18rem">
							<img src="./images/carandiru_thumb.jpg" alt="Miniatura Carandiru" />
							<div class="news-description">
								<div class="new">Novo</div>
								<caption>
									24 de Janeiro de 2077
								</caption>
							</div>
							<div class="card-body">
								<p class="card-text">
									Some quick example text to build on the card title and
									make up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
				include_once "./components/EmBreve/index.php";
				echo EmBreve();
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
						<div class="row">
							<div class="col-sm-4">
								<img src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="" />
							</div>
							<div class="col-sm-8">
								<h3>Filme</h3>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsam sit ducimus exercitationem
									accusamus velit laborum veniam corporis laboriosam fuga dicta consectetur fugit voluptatibus qui
									error harum delectus, culpa quis!</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<img src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="" />
							</div>
							<div class="col-sm-8">
								<h3>Filme</h3>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus cupiditate beatae totam sunt
									doloribus debitis voluptatibus praesentium natus nam nisi eligendi, aliquid deleniti doloremque
									adipisci quasi quam itaque veniam voluptatum.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<img src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="" />
							</div>
							<div class="col-sm-8">
								<h3>Filme</h3>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus cupiditate beatae totam sunt
									doloribus debitis voluptatibus praesentium natus nam nisi eligendi, aliquid deleniti doloremque
									adipisci quasi quam itaque veniam voluptatum.</p>
							</div>
						</div>
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
<footer>
	<div class="container">
		<div class="row">
			<section class="map-website col-sm-7">
				<h6>Mapa do Site</h6>
				<div class="row">
					<ul class="col-sm-3">
						<li>Home</li>
						<li>Comédia</li>
						<li>Drama</li>
						<li>Ação</li>
					</ul>
					<ul class="col-sm-3">
						<li>Quem Somos</li>
						<li>Contato</li>
						<li>Normas</li>
					</ul>
				</div>
			</section>

			<section class="newsletter-register col-sm-5">
				<h6>Inscreva-se para receber notícias</h6>
				<form action="#">
					<label for="email">
						<input type="email" name="email" id="email" placeholder="E-Mail" />
					</label>
					<button type="submit">Enviar</button>
				</form>
			</section>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
