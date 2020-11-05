<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "O Auto da Compadecida");
?>

<script>
	document.querySelectorAll('.nav-item')[1].classList.add('active');
</script>

<main>

	<div class="container">
		<h1>COMÉDIA</h1>
		<div class="row content">

			<div class="col-sm-9 movie-content">
				<h2>O Auto da Compadecida</h2>
				<p class="movie-description">10 de setembro de 2000 <span>Escrito por Ariano Suassuna</span></p>
				<img class="cover-movie" src="../../../images/auto_da_compadecida_cover.jpg" />
				<h3>Sinopse</h3>
				<p>
					As aventuras nordestinas de João Grilo um pobre sertanejo, mentiroso e Chicó o rapaz mais covarde de todos os homens. Ambos buscam pelo pão de cada dia e passam por vários episódios enganando a todos do pequeno vilarejo de Taperó, sertão da Paraíba. A salvação da dupla acontece com a aparição da Nossa Senhora. Adaptação da obra de Ariano Suassuna.

				</p>
				<h3>Elenco</h3>

				<p>
					<ul>
						<li>Matheus Nachtergaele como João Grilo</li>
						<li>Selton Mello como Chicó</li>
						<li>Rogério Cardoso como Padre João</li>
						<li>Lima Duarte como o Bispo</li>
						<li>Denise Fraga como Dora</li>
						<li>Diogo Vilela como Eurico</li>
						<li>Paulo Goulart como Major Antônio Morais</li>
						<li>Virginia Cavendish como Rosinha</li>
						<li>Aramis Trindade como o cabo Setenta</li>
						<li>Marco Nanini como "Capitão" Severino de Aracaju</li>
						<li>Maurício Gonçalves como Jesus Cristo ("Emanuel")</li>
						<li>Fernanda Montenegro como Nossa Senhora da "Compadecida"</li>
						<li>Luís Melo como o Diabo</li>
						<li>Bruno Garcia como Vicentão</li>
						<li>Enrique Diaz como Cangaceiro "Cabra"</li>
					</ul>
				</p>


				<hr>
				<p><strong>Lançamento: </strong>10 de setembro de 2000</p>
				<p><strong>Plataforma: </strong> GloboPlay </p>
				<p><strong>Diretor: </strong> Guel Arraes </p>

			</div>

			<?php
			include_once "../../../components/EmBreve/index.php";
			echo EmBreve();
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
