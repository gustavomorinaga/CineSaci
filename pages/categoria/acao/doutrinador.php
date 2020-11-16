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

		$json = file_get_contents('../../../database/data.json');
		$filmes = json_decode($json);

		echo Filme(
			$filmes->filmes[0]->pagina->categoria,
			$filmes->filmes[0]->pagina->titulo,
			$filmes->filmes[0]->data,
			$filmes->filmes[0]->pagina->autor,
			$filmes->filmes[0]->pagina->banner,
			$filmes->filmes[0]->pagina->sinopse, 
			ListaElenco($filmes->filmes[0]->pagina->elenco),
			$filmes->filmes[0]->pagina->lancamento,
			ListaPlataforma($filmes->filmes[0]->pagina->plataformas),
			$filmes->filmes[0]->pagina->diretor
		);
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
