<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Tropa de Elite");
?>

<script>
	document.querySelectorAll('.nav-item')[3].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";
		echo Filme(
			'Ação',
			'Tropa de Elite',
			'5 de outubro de 2007',
			'Rodrigo Pimentel',
			'tropa_de_elite_cover.jpg',
			'O filme mostra o dia-a-dia de policiais do BOPE, comanda pelo capitão Nascimento, um policial que está
			buscando um substituto para poder deixar o batalhão. Nesta busca dois amigos de infância se tornam policiais
			ressaltados pela honestidade e honra, indignados com a corrupção da polícia do Rio.', 
			ListaElenco([
				'Wagner Moura como Roberto Nascimento (Capitão Nascimento)',
				'André Ramiro como André Matias',
				'Caio Junqueira como Neto Gouveia',
				'Milhem Cortaz como Fábio Barbosa',
				'Milhem Cortaz como Riquelme',
				'Fernanda Machado como Maria',
				'Paulo Vilela como Eduardo',
				'Fernanda de Freitas como Roberta Fontes',
				'Maria Ribeiro como Rosane',
				'Fábio Lago como Claudio Baiano',
				'André Di Mauro como Pedro Rodrigues',
				'Juliano Cazarré como Soldado Tatu',
				'Marcelo Valle como Oliveira',
				'Marcelo Escorel como Coronel Otávio',
				'Sandro Rocha como Sargento Rocha',
				'Paulo Hamilton como Soldado Paulo'
			]),
			'5 de outubro de 2007',
			ListaPlataforma([
				'Netflix',
				'GloboPlay',
				'Telecine'
			]),
			'José Padilha');
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
