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
<footer>
	<div class="container">
		<div class="row">
			<section class="map-website col-sm-7">
				<h6>Mapa do Site</h6>
				<div class="row">
					<ul class="col-sm-3">
						<li>Home</li>
						<li>Comédia</li>
						<li>Drama</li>
						<li>Ação</li>
					</ul>
					<ul class="col-sm-3">
						<li>Quem Somos</li>
						<li>Contato</li>
						<li>Normas</li>
					</ul>
				</div>
			</section>

			<section class="newsletter-register col-sm-5">
				<h6>Inscreva-se para receber notícias</h6>
				<form action="#">
					<label for="email">
						<input type="email" name="email" id="email" placeholder="E-Mail" />
					</label>
					<button type="submit">Enviar</button>
				</form>
			</section>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
