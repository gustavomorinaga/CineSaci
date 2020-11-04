<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>

	<div class="container">
		<h1>DRAMA</h1>
		<div class="row content">

			<div class="col-sm-9 movie-content">
				<h2>Carandiru: O Filme</h2>
				<p class="movie-description"> 11 de abril de 2003 <span>Escrito por Drauzio Varella</span></p>
				<img class="cover-movie" src="../../../images/carandiru_cover.jpg" />
				<h3>Sinopse</h3>
				<p>
					Um médico é voluntário, em um trabalho de prevenção a AIDS em um dos maiores presídios da América Latina, conhecido como Carandiru. Ele começa a observar a realidade vivida dentro dos cárceres, visualizando muita violência, celas lotadas e instalações precárias. Entretanto apesar de vários problemas, o médico percebe que os prisioneiros lá dentro são solidários, organizados e com grande disposição para viver.

				</p>
				<h3>Elenco</h3>

				<p>
					<ul>
						<li>Luiz Carlos Vasconcelos como Dr. Drauzio Varella</li>
						<li>Rodrigo Santoro como Lady Di</li>
						<li>Milton Gonçalves como Chico</li>
						<li>Lázaro Ramos como Ezequiel</li>
						<li>Caio Blat como Deusdete</li>
						<li>Milhem Cortaz como Peixeira</li>
						<Li>Wagner Moura como Zico</li>
						<li>Dionisio Neto como Lula</li>
						<li>Floriano Peixoto como Antônio Carlos</li>
						<Li>Rita Cadillac como ela mesma</li>
						<li>Gero Camilo como Sem Chance</li>
						<li>Ivan de Almeida como Nego Preto</li>
						<li>Ailton Graça como Majestade</li>
						<li>Maria Luisa Mendonça como Dalva</li>
						<li>Aída Leiner como Rosirene</li>
						<li>Júlia Ianina como Francineide</li>
						<Li>Sabrina Greve como Catarina</li>
						<li>Nelson Machado como Carioca</li>
						<li>Sabotage como Fuinha</li>
					</ul>
				</p>


				<hr>
				<p><strong>Lançamento: </strong>11 de abril de 2003</p>
				<p><strong>Plataforma: </strong> Now NET </p>
				<p><strong>Diretor: </strong> Héctor Babenco </p>

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
