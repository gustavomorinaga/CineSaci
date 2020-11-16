<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "O Auto da Compadecida");
?>

<script>
	document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";

		$json = file_get_contents('../../../database/data.json');
		$filmes = json_decode($json);

		echo Filme(
			$filmes->filmes[2]->pagina->categoria,
			$filmes->filmes[2]->pagina->titulo,
			$filmes->filmes[2]->data,
			$filmes->filmes[2]->pagina->autor,
			$filmes->filmes[2]->pagina->banner,
			$filmes->filmes[2]->pagina->sinopse, 
			ListaElenco($filmes->filmes[2]->pagina->elenco),
			$filmes->filmes[2]->pagina->lancamento,
			ListaPlataforma($filmes->filmes[2]->pagina->plataformas),
			$filmes->filmes[2]->pagina->diretor
		);
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
