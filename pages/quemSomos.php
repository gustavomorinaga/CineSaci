<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Quem Somos");
?>

<script>
	document.querySelectorAll('.nav-item')[4].classList.add('active');
</script>

<main>

	<div class="container about-content">
		<h1>QUEM SOMOS</h1>
		<div class="row content">
			<div class="col-sm-12">
				<h2>Equipe Criativa</h2>
			</div>
		</div>
		<div class="row content">

			<div class="col-sm-5">
				<img class="logo" src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="Logo do Cine Saci" />
			</div>

			<div class="col-sm-7">
				<h3>Nome do Aluno</h3>
				<p><strong>Cargo: </strong>Programador</p>
				<p><strong>R.A.: </strong>123.456.789-0</p>
				<p><strong>Área: </strong>Programador</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dignissimos reprehenderit tenetur
					consequuntur delectus sequi accusantium, tempore rem obcaecati distinctio qui non labore error molestiae
					explicabo a reiciendis. Quia, tenetur.</p>
			</div>

		</div>

		<div class="row content">

			<div class="col-sm-5">
				<img class="logo" src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="Logo do Cine Saci" />
			</div>

			<div class="col-sm-7">
				<h3>Nome do Aluno</h3>
				<p><strong>Cargo: </strong>Programador</p>
				<p><strong>R.A.: </strong>123.456.789-0</p>
				<p><strong>Área: </strong>Programador</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dignissimos reprehenderit tenetur
					consequuntur delectus sequi accusantium, tempore rem obcaecati distinctio qui non labore error molestiae
					explicabo a reiciendis. Quia, tenetur.</p>
			</div>

		</div>

		<div class="row content">

			<div class="col-sm-5">
				<img class="logo" src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="Logo do Cine Saci" />
			</div>

			<div class="col-sm-7">
				<h3>Nome do Aluno</h3>
				<p><strong>Cargo: </strong>Programador</p>
				<p><strong>R.A.: </strong>123.456.789-0</p>
				<p><strong>Área: </strong>Programador</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dignissimos reprehenderit tenetur
					consequuntur delectus sequi accusantium, tempore rem obcaecati distinctio qui non labore error molestiae
					explicabo a reiciendis. Quia, tenetur.</p>
			</div>

		</div>


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
