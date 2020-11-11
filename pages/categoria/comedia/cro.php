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
		echo Filme(
			'Comédia',
			'Crô - O Filme',
			'29 de novembro de 2013',
			'Aguinaldo Silva',
			'cro_cover.jpg',
			'Após herdar a fortuna de Tereza Cristina, Crodoaldo Valério, mais conhecido como "Crô" (Marcelo Serrado),
			está cansado da vida de milionário. Decidido a encontrar uma nova musa a quem possa dedicar sua vida, ele
			inicia uma busca pessoal que faz com que entreviste diversas peruas. Seu objetivo é encontrar aquela que
			seja melhor qualificada para que ele próprio possa servir como mordomo, assim como fez com sua antiga
			patroa. Entretanto, após muito avaliar, acaba percebendo que sua musa ideal é justamente aquela que jamais
			havia imaginado. E ao mesmo tempo demonstra que ficou apaixonado pelo motorista Baltazar (Alexandre Nero) a
			quem o chama de Zoiudo e que é um machão homofóbico.', 
			ListaElenco([
				'Marcelo Serrado como Crodoaldo Valério (Crô)',
				'Alexandre Nero como Baltazar (Zóiudo)',
				'Urzula Canaviri como Paloma Arce',
				'Carolina Ferraz como Vanusa Ribeiro',
				'Milhem Cortaz como Riquelme',
				'Kátia Moraes como Marilda',
				'Carlos Machado como Jean-Jacques',
				'Nataly Cabanas como Elena Arce',
				'Mari Nogueira como Juana',
				'Ivete Sangalo como Alzira Valério',
				'Luciana Paes como Ariadne Fontura',
				'Alice Assef como Gilda',
				'Tiago Abravanel como Juiz de Paz',
				'Karin Rodrigues como Francisca Oliveira',
				'Jacqueline Dalabona como Madame',
				'David Brasil como cabeleireiro',
				'Salete Campari como convidada do casamento',
				'Ana Maria Braga como ela mesma',
				'Gaby Amarantos como ela mesma'
			]),
			'29 de novembro de 2013',
			ListaPlataforma([
				'Netflix'
			]),
			'Bruno Barreto');
	?>

</main>

<?php
include_once "../../../components/Footer/index.php";
echo Footer("../../../");
?>
