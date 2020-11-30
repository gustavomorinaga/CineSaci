<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Contato");
?>

<script>
	document.querySelectorAll('.nav-item')[5].classList.add('active');
</script>

<main>

	<section class="container contact-content">
		<h1>CONTATO</h1>
		<section class="row content">
			<h2>Fale Conosco</h2>
			<article class="col-sm-12">
				<img class="logo" src="https://hyperflix.vercel.app/static/media/Logo.632cc64b.png" alt="Logo do Cine Saci" />
				<p><strong>Endereço:</strong></p>
				<p>Rua Piracicabana, N° 69, Debaixo da ponte - Angola</p>

				<p><strong>Telefone:</strong></p>
				<p>(11) 4002-8922</p>

				<p><strong>Celular:</strong></p>
				<p>(11) 99999-6666</p>
			</article>
		</section>

		<section class="row content">
			<h2>Formulário de Contato</h2>
			<section class="col-sm-12">
				<form>
					<section class="row">
						<article class="col-sm-6">
							<section class="form-group">
								<label for="name">Nome:</label>
								<input type="text" class="form-control" id="name" placeholder="Digite seu nome" required>
							</section>

							<section class="form-group">
								<label for="email">E-Mail:</label>
								<input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" required>
							</section>

							<section class="form-group">
								<label for="assunto">Assunto</label>
								<select class="form-control" id="assunto" required>
									<option selected>Escolha um assunto...</option>
									<option value="1">Avaliação</option>
									<option value="2">Críticas</option>
									<option value="3">Sugestões</option>
									<option value="4">Problemas</option>
								</select>
							</section>
							<section class="form-group form-check">
								<label class="form-check-label" for="conf-email">
									<input type="checkbox" class="form-check-input" id="conf-email">
									Enviar um e-mail de confirmação para mim
								</label>
							</section>
						</article>

						<aside class="col-sm-6">

							<section class="form-group">
								<label for="mensagem">Mensagem:</label>
								<textarea class="form-control" id="mensagem" rows="8" placeholder="Digite a sua mensagem..." required></textarea>
							</section>

							<button type="submit" class="btn btn-primary mb-2">Enviar E-Mail</button>

						</aside>
					</section>
				</form>
			</section>
		</section>

</main>

<?php
include_once "../components/Footer/index.php";
echo Footer("../");
?>
