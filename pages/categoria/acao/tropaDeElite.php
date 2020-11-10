<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Tropa de Elite");
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

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
