<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "O Auto da Compadecida");
?>

<script>
	document.querySelectorAll('.nav-item')[1].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";
		echo Filme(
			'Comédia',
			'O Auto da Compadecida',
			'10 de setembro de 2000',
			'Ariano Suassuna',
			'auto_da_compadecida_cover.jpg',
			'As aventuras nordestinas de João Grilo um pobre sertanejo, mentiroso e Chicó o rapaz mais covarde de todos os homens. Ambos buscam pelo pão de cada dia e passam por vários episódios enganando a todos do pequeno vilarejo de Taperó, sertão da Paraíba. A salvação da dupla acontece com a aparição da Nossa Senhora. Adaptação da obra de Ariano Suassuna.', 
			ListaElenco([
				'Matheus Nachtergaele como João Grilo',
				'Selton Mello como Chicó',
				'Rogério Cardoso como Padre João',
				'Lima Duarte como o Bispo',
				'Denise Fraga como Dora',
				'Diogo Vilela como Eurico',
				'Paulo Goulart como Major Antônio Morais',
				'Virginia Cavendish como Rosinha',
				'Aramis Trindade como o cabo Setenta',
				'Marco Nanini como "Capitão" Severino de Aracaju',
				'Maurício Gonçalves como Jesus Cristo ("Emanuel")',
				'Fernanda Montenegro como Nossa Senhora da "Compadecida"',
				'Luís Melo como o Diabo',
				'Bruno Garcia como Vicentão',
				'Enrique Diaz como Cangaceiro "Cabra"'
			]),
			'10 de setembro de 2000',
			ListaPlataforma([
				'GloboPlay'
			]),
			'Guel Arraes');
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
