<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "O Doutrinador");
?>

<script>
	document.querySelectorAll('.nav-item')[3].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";
		echo Filme(
			'Ação',
			'O Doutrinador',
			'1 de novembro de 2018',
			'Luciano Cunha',
			'doutrinador_cover.jpg',
			'Um agente traumatizado decide fazer justiça com as próprias mãos em busca de vingança. Atacando a impunidade que concede aos donos de empreiteiras e políticos enriqueçam, através da miséria da população brasileira.', 
			ListaElenco([
				'Kiko Pissolato como Miguel Montessant (O Doutrinador)',
				'Tainá Medina como Nina',
				'Samuel de Assis como Edu',
				'Nicolas Trevijano como Diogo',
				'Marília Gabriela como Maria',
				'Eduardo Moscovis como Sandro Corrêa',
				'Carlos Betão como Antero Gomes',
				'Eduardo Chagas como Oliveira',
				'Natália Lage como Isabela Montessant',
				'Tuca Andrada como Tenente Siqueira',
				'Natallia Rodrigues como Penélope',
				'Helena Ranaldi como Julia Machado',
				'Lucy Ramos como Marina Sales',
				'Helena Luz como Alice Montessant'
			]),
			'5 de outubro de 2007',
			ListaPlataforma([
				'GloboPlay',
				'Telecine'
			]),
			'Gustavo Bonafé');
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
