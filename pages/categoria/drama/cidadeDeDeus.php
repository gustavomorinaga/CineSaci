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
<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
