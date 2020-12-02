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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.9879122700877!2d-47.13623224869923!3d-23.532937166354902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0d54817a1725%3A0x3dcff522a27b9b96!2sFaculdade%20de%20Tecnologia%20de%20S%C3%A3o%20Roque!5e0!3m2!1spt-BR!2sbr!4v1606785086870!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
