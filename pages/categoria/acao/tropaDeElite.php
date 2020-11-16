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

		$json = file_get_contents('../../../database/data.json');
		$filmes = json_decode($json);

		echo Filme(
			$filmes->filmes[1]->pagina->categoria,
			$filmes->filmes[1]->pagina->titulo,
			$filmes->filmes[1]->data,
			$filmes->filmes[1]->pagina->autor,
			$filmes->filmes[1]->pagina->banner,
			$filmes->filmes[1]->pagina->sinopse, 
			ListaElenco($filmes->filmes[1]->pagina->elenco),
			$filmes->filmes[1]->pagina->lancamento,
			ListaPlataforma($filmes->filmes[1]->pagina->plataformas),
			$filmes->filmes[1]->pagina->diretor
		);
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
