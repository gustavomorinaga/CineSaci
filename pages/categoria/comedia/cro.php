<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Crô");
?>

<script>
	document.querySelectorAll('.nav-item')[1].classList.add('active');
</script>

<main>

	<div class="container">
		<h1>COMÉDIA</h1>
		<div class="row content">

			<div class="col-sm-9 movie-content">
				<h2>Crô - O Filme</h2>
				<p class="movie-description"> 29 de novembro de 2013 <span>Escrito por Aguinaldo Silva</span></p>
				<img class="cover-movie" src="../../../images/cro_cover.jpg" />
				<h3>Sinopse</h3>
				<p>Após herdar a fortuna de Tereza Cristina, Crodoaldo Valério, mais conhecido como "Crô" (Marcelo Serrado),
					está cansado da vida de milionário. Decidido a encontrar uma nova musa a quem possa dedicar sua vida, ele
					inicia uma busca pessoal que faz com que entreviste diversas peruas. Seu objetivo é encontrar aquela que
					seja melhor qualificada para que ele próprio possa servir como mordomo, assim como fez com sua antiga
					patroa. Entretanto, após muito avaliar, acaba percebendo que sua musa ideal é justamente aquela que jamais
					havia imaginado. E ao mesmo tempo demonstra que ficou apaixonado pelo motorista Baltazar (Alexandre Nero) a
					quem o chama de Zoiudo e que é um machão homofóbico.
				</p>
				<h3>Elenco</h3>

				<ul>
					<li>Marcelo Serrado como Crodoaldo Valério (Crô)</li>
					<li>Alexandre Nero como Baltazar (Zóiudo)</li>
					<li>Urzula Canaviri como Paloma Arce</li>
					<li>Carolina Ferraz como Vanusa Ribeiro</li>
					<li>Milhem Cortaz como Riquelme</li>
					<li>Kátia Moraes como Marilda</li>
					<li>Carlos Machado como Jean-Jacques</li>
					<li>Nataly Cabanas como Elena Arce</li>
					<li>Mari Nogueira como Juana</li>
					<li>Ivete Sangalo como Alzira Valério</li>
					<li>Luciana Paes como Ariadne Fontura</li>
					<li>Alice Assef como Gilda</li>
					<li>Tiago Abravanel como Juiz de Paz</li>
					<li>Karin Rodrigues como Francisca Oliveira</li>
					<li>Jacqueline Dalabona como Madame</li>
					<li>David Brasil como cabeleireiro</li>
					<li>Salete Campari como convidada do casamento</li>
					<li>Ana Maria Braga como ela mesma</li>
					<li>Gaby Amarantos como ela mesma</li>
				</ul>


				<hr>
				<p><strong>Lançamento: </strong> 29 de novembro de 2013</p>
				<p><strong>Plataforma: </strong> Netflix</p>
				<p><strong>Diretor: </strong> Bruno Barreto</p>

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
