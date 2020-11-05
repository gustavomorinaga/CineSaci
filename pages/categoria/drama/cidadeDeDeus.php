<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Cidade de Deus");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>

	<div class="container">
		<h1>DRAMA</h1>
		<div class="row content">

			<div class="col-sm-9 movie-content">
				<h2>Cidade de Deus</h2>
				<p class="movie-description"> 30 de agosto de 2002 <span>Escrito por Paulo Lins</span></p>
				<img class="cover-movie" src="../../../images/cidade_de_deus_cover.jpg" />
				<h3>Sinopse</h3>
				<p>
					A história de um jovem negro, pobre que cresce em um ambiente de violência chamado Buscapé. Ele vive na
					Cidade Deus, localizada na favela conhecida por seu alto índice de violência. Aterrorizado com a
					possibilidade de se tornar um bandido, Buscapé por ordem do destino é salvo, pelo seu talento de fotógrafo,
					o que permite que ele siga nessa carreira profissional e através das câmeras mostra o dia-a-dia da favela
					onde vive e a violência prevalece.
				</p>
				<h3>Elenco</h3>

				<p>
					<ul>
						<li>Alexandre Rodrigues como Wilson Rodrigues(Buscapé)</li>
						<li>Leandro Firmino como Zé Pequeno</li>
						<li>Phellipe Haagensen como Bené</li>
						<li>Matheus Nachtergaele como Sandro Cenoura</li>
						<li>Seu Jorge como Mané Galinha</li>
						<li>Jonathan Haagensen como Cabeleira</li>
						<Li>Renato de Souza como Renato Rodrigues(Marreco)</li>
						<li>Alice Braga como Angelica</li>
						<li>Roberta Rodrigues como Berenice</li>
						<Li>Daniel Zettel como Tiago</li>
						<li>Rubens Sabino como Neguinho</li>
						<li>Babu Santana como Grande</li>
						<li>Mumuzinho como Palito</li>
					</ul>
				</p>


				<hr>
				<p><strong>Lançamento: </strong>30 de agosto de 2002 </p>
				<p><strong>Plataforma: </strong> Telecine </p>
				<p><strong>Diretor: </strong> Fernando Meirelles </p>

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
