<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Carandiru");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";
		echo Filme(
			'Drama',
			'Carandiru',
			'11 de abril de 2003',
			'Drauzio Varella',
			'carandiru_cover.jpg',
			'Um médico é voluntário, em um trabalho de prevenção a AIDS em um dos maiores presídios da América Latina, conhecido como Carandiru. Ele começa a observar a realidade vivida dentro dos cárceres, visualizando muita violência, celas lotadas e instalações precárias. Entretanto apesar de vários problemas, o médico percebe que os prisioneiros lá dentro são solidários, organizados e com grande disposição para viver.', 
			ListaElenco([
				'Luiz Carlos Vasconcelos como Dr. Drauzio Varella',
				'Rodrigo Santoro como Lady Di',
				'Milton Gonçalves como Chico',
				'Lázaro Ramos como Ezequiel',
				'Caio Blat como Deusdete',
				'Milhem Cortaz como Peixeira',
				'Wagner Moura como Zico',
				'Dionisio Neto como Lula',
				'Floriano Peixoto como Antônio Carlos',
				'Rita Cadillac como ela mesma',
				'Gero Camilo como Sem Chance',
				'Ivan de Almeida como Nego Preto',
				'Ailton Graça como Majestade',
				'Maria Luisa Mendonça como Dalva',
				'Aída Leiner como Rosirene',
				'Júlia Ianina como Francineide',
				'Sabrina Greve como Catarina',
				'Nelson Machado como Carioca',
				'Sabotage como Fuinha'
			]),
			'11 de abril de 2003',
			ListaPlataforma([
				'Now NET'
			]),
			'Héctor Babenco');
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
