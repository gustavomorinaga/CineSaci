<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Carandiru");
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
<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
