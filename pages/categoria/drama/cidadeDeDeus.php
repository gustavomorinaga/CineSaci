<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Cidade de Deus");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";
		echo Filme(
			'Drama',
			'Cidade de Deus',
			'30 de agosto de 2002',
			'Paulo Lins',
			'cidade_de_deus_cover.jpg',
			'A história de um jovem negro, pobre que cresce em um ambiente de violência chamado Buscapé. Ele vive na
			Cidade Deus, localizada na favela conhecida por seu alto índice de violência. Aterrorizado com a
			possibilidade de se tornar um bandido, Buscapé por ordem do destino é salvo, pelo seu talento de fotógrafo,
			o que permite que ele siga nessa carreira profissional e através das câmeras mostra o dia-a-dia da favela
			onde vive e a violência prevalece.', 
			ListaElenco([
				'Alexandre Rodrigues como Wilson Rodrigues(Buscapé)',
				'Leandro Firmino como Zé Pequeno',
				'Phellipe Haagensen como Bené',
				'Matheus Nachtergaele como Sandro Cenoura',
				'Seu Jorge como Mané Galinha',
				'Jonathan Haagensen como Cabeleira',
				'Renato de Souza como Renato Rodrigues(Marreco)',
				'Alice Braga como Angelica',
				'Roberta Rodrigues como Berenice',
				'Daniel Zettel como Tiago',
				'Rubens Sabino como Neguinho',
				'Babu Santana como Grande',
				'Mumuzinho como Palito'
			]),
			'30 de agosto de 2002',
			ListaPlataforma([
				'Telecine'
			]),
			'Fernando Meirelles');
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
