<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../");
?>

<script>
	document.querySelectorAll('.nav-item')[3].classList.add('active');
</script>

<main>

	<div class="container">
		<h1>AÇÃO</h1>
		<div class="row content">

			<div class="col-sm-9 movie-content">
				<h2>Tropa de Elite</h2>
				<p class="movie-description"> 5 de outubro de 2007 <span>Escrito por Rodrigo Pimentel, André Batista, Luiz Eduardo Soares</span></p>
				<img class="cover-movie" src="../../../images/tropa_de_elite_cover.jpg" />
				<h3>Sinopse</h3>
				<p> O filme mostra o dia-a-dia de policiais do BOPE, comanda pelo capitão Nascimento, um policial que está
					buscando um substituto para poder deixar o batalhão. Nesta busca dois amigos de infância se tornam policiais
					ressaltados pela honestidade e honra, indignados com a corrupção da polícia do Rio.
				</p>
				<h3>Elenco</h3>

				<p>
					<ul>
						<li>Wagner Moura como Roberto Nascimento (Capitão Nascimento)</li>
						<li>André Ramiro como André Matias</li>
						<li>Caio Junqueira como Neto Gouveia</li>
						<li>Milhem Cortaz como Fábio Barbosa</li>
						<li>Milhem Cortaz como Riquelme</li>
						<li>Fernanda Machado como Maria</li>
						<li>Paulo Vilela como Eduardo</li>
						<li>Fernanda de Freitas como Roberta Fontes</li>
						<li>Maria Ribeiro como Rosane</li>
						<li>Fábio Lago como Claudio Baiano</li>
						<li>André Di Mauro como Pedro Rodrigues</li>
						<li>Juliano Cazarré como Soldado Tatu</li>
						<li>Marcelo Valle como Oliveira</li>
						<li>Marcelo Escorel como Coronel Otávio</li>
						<li>Sandro Rocha como Sargento Rocha</li>
						<li>Paulo Hamilton como Soldado Paulo</li>
					</ul>
				</p>


				<hr>
				<p><strong>Lançamento: </strong> 5 de outubro de 2007</p>
				<p><strong>Plataforma: </strong> Netflix, GloboPlay, Telecine</p>
				<p><strong>Diretor: </strong> José Padilha</p>

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
