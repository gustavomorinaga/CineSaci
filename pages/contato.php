<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Contato");
?>

<script>
	document.querySelectorAll('.nav-item')[5].classList.add('active');
</script>

<main>

	<div class="container contact-content">
		<h1>CONTATO</h1>
		<div class="row content">
			<h2>Fale Conosco</h2>
			<div class="col-sm-12">
				<img class="logo" src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="Logo do Cine Saci" />
				<p><strong>Endereço:</strong></p>
				<p>Rua Piracicabana, N° 69, Debaixo da ponte - Angola</p>

				<p><strong>Telefone:</strong></p>
				<p>(11) 4002-8922</p>

				<p><strong>Celular:</strong></p>
				<p>(11) 99999-6666</p>
			</div>
		</div>

		<div class="row content">
			<h2>Formulário de Contato</h2>
			<div class="col-sm-12">
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="name">Nome:</label>
								<input type="text" class="form-control" id="name" placeholder="Digite seu nome" required>
							</div>

							<div class="form-group">
								<label for="email">E-Mail:</label>
								<input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" required>
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<select class="form-control" id="assunto" required>
									<option selected>Escolha um assunto...</option>
									<option value="1">Avaliação</option>
									<option value="2">Críticas</option>
									<option value="3">Sugestões</option>
									<option value="4">Problemas</option>
								</select>
							</div>
							<div class="form-group form-check">
								<label class="form-check-label" for="conf-email">
									<input type="checkbox" class="form-check-input" id="conf-email">
									Enviar um e-mail de confirmação para mim
								</label>
							</div>
						</div>

						<div class="col-sm-6">

							<div class="form-group">
								<label for="mensagem">Mensagem:</label>
								<textarea class="form-control" id="mensagem" rows="8" placeholder="Digite as mensagens..." required></textarea>
							</div>

							<button type="submit" class="btn btn-primary mb-2">Enviar E-Mail</button>

						</div>
					</div>
				</form>
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
