<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Normas");
?>

<script>
	document.querySelectorAll('.nav-item')[6].classList.add('active');
</script>

<main>

	<div class="container about-content">
		<h1>Normas</h1>
		<div class="row content">
			<div class="col-sm-12">
				<h2>Termos de Serviços e Condições</h2>
			</div>
		</div>
		<div class="row content">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="nav nav-pills " id="faq-tabs" role="tablist" aria-orientation="vertical">
							<a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
								<i class="mdi mdi-help-circle"></i>Perguntas Frequentes
							</a>
							<a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
								<i class="mdi mdi-account"></i>Primeira seção
							</a>
							<a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
								<i class="mdi mdi-account-settings"></i>Segunda seção
							</a>             	
						</div>
					</div>
					<div class="col-lg-8">
						<div class="tab-content" id="faq-tab-content">
							<div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
								<div class="accordion" id="accordion-tab-1">
									<div class="card">
										<div class="card-header" id="accordion-tab-1-heading-1">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, omnis repellendus quibusdam animi odio rem iure tenetur. Tempore veniam ipsum, odio numquam provident quisquam amet dolorum dolore? Consectetur, error ex.</p>
												<p><strong>Exemplo: </strong>Lorem</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-1-heading-2">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
											<div class="card-body">
												<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi animi ab rerum fugit! Voluptate, dignissimos. Magni amet minus quam pariatur? Animi iure adipisci reprehenderit nam quisquam officiis et quos!</p>
												<p><strong>Exemplo: </strong>Lorem</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-1-heading-3">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia minima quo illo! Saepe incidunt eaque rerum optio numquam quia nesciunt vero mollitia fugiat molestiae? Praesentium quidem ipsam excepturi incidunt perspiciatis.</p>
												<p><strong>Exemplo: </strong>Lorem</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-1-heading-4">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
											<div class="card-body">
												<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam consectetur quas cumque nobis quis. Quo magni obcaecati, dignissimos quae facere minima omnis earum sint dicta! Possimus earum voluptate debitis eligendi!</p>
												<p><strong>Exemplo: </strong>Lorem</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
								<div class="accordion" id="accordion-tab-2">
									<div class="card">
										<div class="card-header" id="accordion-tab-2-heading-1">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse show" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias magni, corrupti, rem natus dicta, corporis laboriosam sunt nobis deserunt quisquam non. Quasi, animi totam earum sunt itaque inventore nostrum at.</p>
												<p><strong>Exemplo: </strong>Lorem</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-2-heading-2">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
											<div class="card-body">
												<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, rerum dolor laudantium dolorem, dolore blanditiis dignissimos cumque ipsum, natus harum error. Omnis aliquam nihil animi vitae laborum ullam natus ea.</p>
												<p><strong>Exemplo: </strong>Lorem</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-2-heading-3">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
											<div class="card-body">
												<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolore assumenda voluptates, ipsam dignissimos autem laboriosam in dolorum animi, molestiae nobis! Modi voluptates veritatis, ipsa aliquam libero fuga commodi ducimus!</p>
												<p><strong>Exemplo: </strong>Lorem <em>Lorem</em> Lorem</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-2-heading-4">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4">Lorem ipsum</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
											<div class="card-body">
												<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis excepturi illo cum totam quam tempora alias libero eligendi, quibusdam culpa reprehenderit nisi fuga expedita neque. Nihil quidem voluptatum debitis!</p>
												<p><strong>Exemplo: </strong> Lorem</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
								<div class="accordion" id="accordion-tab-3">
									<div class="card">
										<div class="card-header" id="accordion-tab-3-heading-1">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">Michelle, I don't regret this, but I both rue and lament it?</button>
											</h5>
										</div>
										<div class="collapse show" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
											<div class="card-body">
												<p>Look, last night was a mistake. We'll need to have a look inside you with this camera. Good news, everyone! There's a report on TV with some very bad news! You know, I was God once. You lived before you met me?!</p>
												<p><strong>Example: </strong>I'm Santa Claus! Pansy. That's a popular name today. Little "e", big "B"?</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-3-heading-2">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">Why am I sticky and naked?</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
											<div class="card-body">
												<p>Did I miss something fun? Humans dating robots is sick. You people wonder why I'm still single? It's 'cause all the fine robot sisters are dating humans! Kids don't turn rotten just from watching TV.</p>
												<p><strong>Example: </strong>I usually try to keep my sadness pent up inside where it can fester quietly as a mental illness.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-3-heading-3">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">Is that a cooking show?</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
											<div class="card-body">
												<p>OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can. You seem malnourished. Are you suffering from intestinal parasites? Check it out, y'all. Everyone who was invited is here. I am Singing Wind, Chief of the Martians.</p>
												<p><strong>Example: </strong>Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor.</p>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="accordion-tab-3-heading-4">
											<h5>
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-4" aria-expanded="false" aria-controls="accordion-tab-3-content-4">You are the last hope of the universe?</button>
											</h5>
										</div>
										<div class="collapse" id="accordion-tab-3-content-4" aria-labelledby="accordion-tab-3-heading-4" data-parent="#accordion-tab-3">
											<div class="card-body">
												<p>I don't want to be rescued. I videotape every customer that comes in here, so that I may blackmail them later. Ah, computer dating. It's like pimping, but you rarely have to use the phrase "upside your head."</p>
												<p><strong>Example: </strong>Tell them I hate them.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
