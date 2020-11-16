<?php
include_once "../../../components/Navbar/index.php";
echo Navbar("../../../", "Crô");
?>

<script>
	document.querySelectorAll('.nav-item')[1].classList.add('active');
</script>

<main>

	<?php
		include_once "../../../components/Filme/index.php";

		$json = file_get_contents('../../../database/data.json');
		$filmes = json_decode($json);

		echo Filme(
			$filmes->filmes[3]->pagina->categoria,
			$filmes->filmes[3]->pagina->titulo,
			$filmes->filmes[3]->data,
			$filmes->filmes[3]->pagina->autor,
			$filmes->filmes[3]->pagina->banner,
			$filmes->filmes[3]->pagina->sinopse, 
			ListaElenco($filmes->filmes[3]->pagina->elenco),
			$filmes->filmes[3]->pagina->lancamento,
			ListaPlataforma($filmes->filmes[3]->pagina->plataformas),
			$filmes->filmes[3]->pagina->diretor
		);
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
