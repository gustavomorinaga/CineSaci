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
				<h2>O Doutrinador</h2>
				<p class="movie-description"> 1 de novembro de 2018 <span>Escrito por Luciano Cunha</span></p>
				<img class="cover-movie" src="../../../images/doutrinador_cover.jpg" />
				<h3>Sinopse</h3>
				<p> Um agente traumatizado decide fazer justiça com as próprias mãos em busca de vingança. Atacando a impunidade que concede aos donos de empreiteiras e políticos enriqueçam, através da miséria da população brasileira.

				</p>
				<h3>Elenco</h3>

				<p>
					<ul>
						<li>Kiko Pissolato como Miguel Montessant (O Doutrinador)</li>
						<li>Tainá Medina como Nina</li>
						<li>Samuel de Assis como Edu</li>
						<li>Nicolas Trevijano como Diogo</li>
						<li>Marília Gabriela como Maria</li>
						<li>Eduardo Moscovis como Sandro Corrêa</li>
						<li>Carlos Betão como Antero Gomes</li>
						<li>Eduardo Chagas como Oliveira</li>
						<li>Natália Lage como Isabela Montessant</li>
						<li>Tuca Andrada como Tenente Siqueira</li>
						<li>Natallia Rodrigues como Penélope</li>
						<li>Helena Ranaldi como Julia Machado</li>
						<li>Lucy Ramos como Marina Sales</li>
						<li>Helena Luz como Alice Montessant</li>
					</ul>
				</p>


				<hr>
				<p><strong>Lançamento: </strong> 5 de outubro de 2007</p>
				<p><strong>Plataforma: </strong> GloboPlay, Telecine</p>
				<p><strong>Diretor: </strong> Gustavo Bonafé </p>

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
