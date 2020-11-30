<?php
include_once "../components/Navbar/index.php";
echo Navbar("../", "Normas");
?>

<script>
	document.querySelectorAll('.nav-item')[6].classList.add('active');
</script>

<main>

	<section class="container about-content">
		<h1>Normas</h1>
		<section class="row content">
			<article class="col-sm-12">
				<h2>Termos de Serviços e Condições</h2>
			</article>
		</section>
		<section class="row content">
			<section class="container">
				<section class="row">
					<aside class="col-lg-4">
						<article class="nav nav-pills " id="faq-tabs" role="tablist" aria-orientation="vertical">
							<?php
							include_once "../components/Normas/index.php";
							echo NormasAba("Acesso ao Site", "tab1", "active");
							echo NormasAba("Dados Pessoais do Usuário", "tab2");
							echo NormasAba("Menores de Idade", "tab3");
							echo NormasAba("Responsabilidade do Usuário", "tab4");
							echo NormasAba("Exclusão de Garantias e de Responsabilidade", "tab5");
							echo NormasAba("Vínculos a Outros Sites", "tab6");
							echo NormasAba("Cessão ou Uso Comercial Não Autorizado", "tab7");
							echo NormasAba("Cancelamento", "tab8");
							echo NormasAba("Indenização", "tab9");
							echo NormasAba("Geral", "tab10");
							echo NormasAba("Duração e Rescisão", "tab11");
							echo NormasAba("Localização", "tab12");
							?>
						</article>
					</aside>
					<article class="col-lg-8">
						<section class="tab-content" id="faq-tab-content">
							<?php
							include_once "../components/Normas/index.php";
							echo NormasPainel(
								1,
								[
									NormasConteudo(
										1,
										1,
										1,
										'Acesso ao Site',
										'O acesso e a utilização do Site não exigem a prévia assinatura ou registro do Usuário. Entretanto, é possível que a utilização de alguns dos Serviços oferecidos por meio do Site requeira a assinatura ou registro do Usuário e/ou o pagamento para adquirir serviços especificos.',
										'show'
									),
									NormasConteudo(
										1,
										2,
										2,
										'Utilização do Site',
										ListarSubtermos(
											[
												'O Usuário compromete-se a utilizar o Site em conformidade com estas Condições Gerais, as leis aplicáveis conforme a moral e os bons costumes.',
												'O Usuário obriga-se a abster-se de utilizar o Site com fins ou efeitos ilícitos, contrários ao estabelecido nas Condições Gerais, lesivos aos direitos e interesses de terceiros, ou que de qualquer forma possam danificar, inutilizar, sobrecarregar ou deteriorar o Site ou impedir a normal utilização do mesmo por parte dos Usuários.'
											],
											'ol'
										)
									),
									NormasConteudo(
										1,
										3,
										3,
										'Conteúdo do Site',
										ListarSubtermos(
											[
												'Os conteúdos deste Site, tais como texto, informação, imagens, logos, marcas, e qualquer outro material ( “Conteúdo”) estão protegidos pelas leis aplicáveis em cada jurisdição, mas sem limitação, as leis sobre direitos autorais, patentes, marcas, modelos de utilidade, desenhos industriais e nomes de domínio.',
												'Todo o Conteúdo é propriedade da CineSaci e/ou de qualquer outra sociedade vinculada e/ou de seus provedores de conteúdo. A compilação, interconexão, operacionalidade e disposição dos conteúdos do Site é de propriedade exclusiva da CineSaci e/ou de suas empresas vinculadas. O uso, adaptação, reprodução e/ou comercialização não autorizada do Conteúdo pode ser penalizado pela legislação vigente em cada jurisdição.',
												'Você não copiará nem adaptará o código de programação desenvolvido pela CineSaci, ou por conta da CineSaci para gerar e operar suas páginas, código esse que está protegido pela legislação aplicável e vigente em cada jurisdição.',
												'O usuário tem o direito de compartilhar o conteúdo da página contanto que o mesmo forneça no post os seguintes itens: (I) Link para o site; (II) Os devidos direitos autorais do conteúdo compartilhado quer seja ele o nome do detentor do mesmo ou de seus devidos envolvidos (ATENÇÃO: aquele que descumprir este artigo estará sujeito a punição jurídica por parte da equipe do CineSaci e dos devidos proprietários do conteúdo publicado).'
											],
											'ol'
										)
									),
									NormasConteudo(
										1,
										4,
										4,
										'Usos Proibidos',
										Listar([
											ListarSubtermos(
												[
													'Regras gerais: Os Usuários estão proibidos de utilizar o Site para transmitir, distribuir, armazenar ou destruir material (I) violando a normativa vigente, (II) de forma que sejam infringidos direitos de terceiros ou seja violada a confidencialidade, a honra, a privacidade, a imagem ou outros direitos pessoais de outros indivíduos.',
													'O Site somente poderá ser utilizado com fins lícitos, para acessar a informação referida aos Serviços disponíveis por meio do mesmo. A CineSaci proíbe especificamente qualquer utilização do Site para:',
												],
												'ol'
											),
											ListarSubtermos(
												[
													'Anunciar dados biográficos incompletos, falsos ou inexatos.',
													'Usar qualquer mecanismo para impedir ou tentar impedir o funcionamento adequado deste Site ou qualquer atividade que esteja sendo realizada neste Site.',
													'O uso ou tentativa de uso de qualquer máquina, software, ferramenta, agente ou outro mecanismo para navegar ou buscar neste Site que sejam diferentes das ferramentas de busca fornecidas pela CineSaci neste Site.',
													'Tentar decifrar, descompilar ou obter o código fonte de qualquer programa de software deste Site.'
												],
												'ul'
											),
											'A CineSaci reserva-se o direito de suspender ou dar baixa a qualquer Usuário que, a exclusivo critério da CineSaci, não cumprir os padrões definidos nestas Condições Gerais ou as políticas vigentes da página, sem que isto gere direito a ressarcimento algum.'
										])
									),
									NormasConteudo(
										1,
										5,
										5,
										'Violação de Segurança',
										ListarSubtermos(
											[
												'<i>Regras de Segurança do Site</i>: Os Usuários estão proibidos de violar ou tentar violar a segurança do Site, incluindo, mas sem limitação: (I) o acesso a dados que não estejam destinados a tal usuário ou entrar em um servidor ou conta cujo acesso não está autorizado para o Usuário, (II) avaliar ou testar a vulnerabilidade de um sistema ou rede, ou violar as medidas de segurança ou identificação sem a adequada autorização, (III) tentar impedir o Serviço a qualquer Usuário, anfitrião ou rede, incluindo, mas sem limitação, mediante o envio de vírus ao Site, ou mediante saturação ou ataques de negação de Serviço, (IV) enviar e-mails não pedidos, incluindo promoções e/ou publicidade de produtos ou serviços, ou (V) falsificar qualquer cabeçalho de pacote TCP/IP ou qualquer parte da informação do cabeçalho de qualquer e-mail ou em mensagens de fóruns de debate.',
												'As violações da segurança do sistema ou da rede constituem delitos, que sujeitarão o infrator/violador à responsabilidade civil e penal. A CineSaci investigará os casos de violações da segurança do sistema, podendo dirigir-se à autoridade judicial ou administrativa competente para os efeitos de investigar os Usuários envolvidos em tais violações.',
											],
											'ol'
										),
									),
									NormasConteudo(
										1,
										6,
										6,
										'Canais de Comunicação Disponíveis para os Usuários',
										Listar([
											ListarSubtermos(
												[
													'O Usuário deverá utilizar os canais de comunicação disponíveis —como chats e fóruns de discussão, entre outros— (doravante, os “Canais”) de forma responsável, correta e dando fiel cumprimento à normativa vigente.',
													'O conteúdo de cada mensagem enviada pelo Usuário por meio dos Canais é de única e exclusiva responsabilidade do Usuário. CineSaci não garante a veracidade dos dados pessoais e/ou conteúdos de cada mensagem, efetuados e/ou publicados nos Canais pelo Usuário. O Usuário aceita voluntariamente que o acesso e/ou o uso dos Canais ocorre, em qualquer caso, sob sua única e exclusiva responsabilidade.',
													'A CineSaci reserva-se o direito de suspender, temporária ou definitivamente o uso dos Canais e/ou dos Serviços sem prévio aviso, a quem não respeitar estas Condições Gerais ou realizar atos que atentem contra o normal funcionamento dos Serviços e/ou dos Canais e/ou do Site.',
													'O Usuário reconhece e aceita que as seguintes condutas estão terminantemente proibidas:'
												],
												'ol'
											),
											ListarSubtermos(
												[
													'Utilizar linguagem vulgar/obscena, discriminatória e/ou ofensiva;',
													'Qualquer tipo de ataque pessoal contra Usuários e/ou terceiros, incluindo clientes da CineSaci, mediante assédio, ameaças, insultos;',
													'Qualquer ato contrário às leis, à moral e aos bons costumes;',
													'Publicar mensagens, imagens e hiperlinks ofensivos, difamatórios, caluniosos, injuriosos, falsos, discriminatórios, pornográficos, de conteúdo violento, insultantes, ameaçantes, incitantes a condutas ilícitas ou perigosas para a saúde, e/ou que vulnerem de qualquer forma a privacidade de qualquer terceiro, assim como a violação, direta ou indireta, dos direitos de propriedade intelectual da CineSaci e/ou de qualquer terceiro, incluindo clientes da CineSaci;',
													'Publicar mensagens que possam ferir e/ou afetar a sensibilidade do resto dos Usuários e/ou de qualquer terceiro, incluindo clientes da CineSaci;',
													'Promover, comercializar, vender, publicar e/ou oferecer qualquer classe de produtos, serviços e/ou atividades por intermédio ou por meio da utilização dos Canais, exceto aquelas expressamente permitidas pela CineSaci;',
													'A venda, locação ou cessão, seja a título oneroso ou gratuito, do espaço de comunicação dos Canais;',
													'Publicar mensagens que de qualquer forma contenham publicidade;',
													'O uso ou envio de vírus de computador, malware, spyware, ransomware e/ou a realização de qualquer ato que cause ou possa causar danos ou prejuízos ao normal funcionamento dos Serviços e/ou dos Canais, ou dos equipamentos de informática ou software da CineSaci e/ou de qualquer terceiro, incluindo clientes da CineSaci;',
													'Qualquer ato dirigido a mascarar e/ou falsificar ou dissimular endereços IP, e-mails e/ou qualquer outro meio técnico de identificação dos Usuários ou seus equipamentos de informática;',
													'Qualquer ato que viole a privacidade de outros Usuários, ou que viole qualquer um de seus direitos segundo a Lei N° 13.709/18;',
													'A publicação de dados pessoais sem o consentimento expresso do titular destes;',
													'A transmissão ou divulgação de material que viole a legislação vigente no país e/ou que possa ferir direitos e garantias fundamentais do resto dos Usuários e/ou de qualquer terceiro, incluindo clientes da CineSaci;',
													'A publicação de qualquer tipo de conteúdo em violação de direitos de terceiros, incluindo sem limitação os direitos de propriedade intelectual e/ou industrial.'
												],
												'ul'
											),
										])
									)
								],
								"active"
							);
							echo NormasPainel(
								2,
								[
									NormasConteudo(
										2,
										1,
										1,
										'Registro no Site',
										ListarSubtermos(
											[
												'Quando se registrar no Site, ser-lhe-á solicitado que proporcione à CineSaci certa informação que incluirá, entre outras, nome e sobrenome, endereço e um endereço válido de e-mail, (se for correspondente), entre outros;',
												'A CineSaci NÃO solicita informações e/ou documentos via contato telefônico, WhatsApp ou SMS, para cadastramento de anúncios ou qualquer outra validação de cadastro, tampouco encaminha códigos ou links ao SOLICITANTE, de modo que reconhece que toda e qualquer ligação e/ou mensagem recebida, com menção a CineSaci que não venha de seus canais oficiais, deverá ser imediatamente DESCONSIDERADA.',
												'A CineSaci reserva-se o direito de oferecer-lhe serviços e produtos de terceiros baseados nas preferências que Você haja indicado no momento de se registrar ou em qualquer momento posterior; e tais ofertas podem ser efetuadas pela CineSaci ou por terceiros',
												'Por favor, consulte a Política de Privacidade do Site para conhecer os detalhes relativos ao tratamento de seus Dados Pessoais.',
												'O Usuário será responsável por todos os usos da sua conta, autorizados ou não por si, por isso, a CineSaci recomenda que por questões de segurança este não compartilhe sua senha com terceiros. O Usuário deverá notificar imediatamente a CineSaci sobre qualquer uso sem autorização da sua conta ou senha.',
												'Os Usuários registrados e/ou que utilizarem os Serviços de CineSaci garantem a veracidade, exatidão, vigência e autenticidade da informação facilitada, e se comprometem a mantê-los devidamente atualizados, informando a CineSaci sobre qualquer modificação por meio da seção “Contato” disponível na página principal do Site.',
												'O Usuário autoriza a que a informação pessoal fornecida seja compartilhada com os clientes da CineSaci.'
											],
											'ol'
										)
									)
								]
							);
							echo NormasPainel(
								3,
								[
									NormasConteudo(
										3,
										1,
										1,
										'Menores de Idade',
										ListarSubtermos(
											[
												'Fica proibida a utilização do Site e/ou dos Serviços oferecidos por este por pessoas que careçam de capacidade legal para contratar ou menores de idade (18 anos incompletos). Assim, se você for um usuário que se enquadre nesta condição, por favor, deixe de utilizar o Site. Caso isto não aconteça, os seus pais, tutores ou representantes legais serão considerados responsáveis por todos os atos realizados por estes usuários;',
												'O Site é uma comunidade em constante evolução, que inclui diversos usuários com diferentes experiências e antecedentes. Embora a CineSaci possa monitorar e tomar medidas sobre a conduta inapropriada de outros usuários ou terceiros, no Site ou o acesso ou utilização de qualquer dos Serviços oferecidos, incluindo salas de chat e fóruns públicos, é possível que em qualquer momento possa se apresentar uma linguagem ou outros materiais acessíveis ou por meio de tais que possam ser inapropriados para menores de idade ou ofensivos para outros usuários. As presentes Condições Gerais indicam normas de conduta para os usuários, mas a CineSaci não pode garantir que terceiros as cumpram;',
												'Ao ler o presente texto e continuar a acessar o Site e utilizar os Serviços, o Usuário confirma que é maior de idade.',
												'O Usuário autoriza a que a informação pessoal fornecida seja compartilhada com os clientes da CineSaci.'
											],
											'ol'
										)
									)
								]
							);
							echo NormasPainel(
								4,
								[
									NormasConteudo(
										4,
										1,
										1,
										'Responsabilidade do Usuário',
										'O Usuário declara e aceita que o uso do Site, seus Serviços e os conteúdos é efetuado sob sua única e exclusiva responsabilidade.'
									)
								]
							);
							echo NormasPainel(
								5,
								[
									NormasConteudo(
										5,
										1,
										1,
										'Exclusão de Garantias e de Responsabilidade',
										ListarSubtermos(
											[
												'Atento ao estado da técnica e à estrutura e funcionamento das redes, o Site não pode confirmar que cada Usuário é quem declara ser;',
												'A CineSaci não garante a disponibilidade, a continuidade e infalibilidade do funcionamento do Site e dos Serviços oferecidos. Nem todos os Serviços e conteúdos em geral encontram-se disponíveis para todas as áreas geográficas;',
												'A CineSaci dispõe de recursos de segurança para a normal funcionalidade de seu Site e Serviços, no entanto, ainda assim, diante do dinamismo da tecnologia não consegue garantir a ausência integral de falhas e erros;',
												'A CineSaci não garante a exatidão, a veracidade, a exaustividade ou a atualização dos conteúdos, dos Serviços, do software, dos textos, dos gráficos e dos vínculos;',
												'Em nenhum caso a CineSaci será responsável por qualquer dano, incluindo, mas sem limitação, danos diretos e/ou indiretos, lucros cessantes ou perda de chance que resultem do uso ou da impossibilidade de uso do Site, sem prejuízo de que a CineSaci tenha sido advertido sobre a possibilidade de tais danos.',
												'A CineSaci não poderá ser por danos e prejuízos decorrentes de culpa exclusiva de terceiros ou do titular de dados.'
											],
											'ol'
										)
									)
								]
							);
							echo NormasPainel(
								6,
								[
									NormasConteudo(
										6,
										1,
										1,
										'Vínculos a Outros Sites',
										'O Site contém vínculos a outros sites de Internet. A CineSaci não respalda os conteúdos desses sites web. A CineSaci não é responsável pelo conteúdo dos websites de terceiros e não faz nenhuma afirmação relativa ao conteúdo ou sua exatidão nesses sites web de terceiros. Se o Usuário decidir acessar estes websites, recomendamos que tomem ciência de seus Termos de Uso e Políticas de Privacidade, que não se confundem com os deste Site.'
									)
								]
							);
							echo NormasPainel(
								7,
								[
									NormasConteudo(
										7,
										1,
										1,
										'Cessão ou Uso Comercial Não Autorizado',
										'Você aceita não ceder, sob nenhum título, seus direitos ou obrigações segundo estas Condições Gerais. Você também aceita não realizar nenhum uso comercial não autorizado do Site.'
									)
								]
							);
							echo NormasPainel(
								8,
								[
									NormasConteudo(
										8,
										1,
										1,
										'Cancelamento',
										'A CineSaci tem o poder, e não a obrigação, de emitir advertências, suspensões temporárias e cancelamentos permanentes (baixa) dos Usuários registrados por infrações a estas Condições Gerais, e/ou qualquer aviso, regulamento de uso e instrução levados ao conhecimento do Usuário pela CineSaci, bem como poderá tomar as medidas legais cabíveis.'
									)
								]
							);
							echo NormasPainel(
								9,
								[
									NormasConteudo(
										9,
										1,
										1,
										'Indenização',
										'Você aceita manter a CineSaci indene contra qualquer encargo, ação ou demanda, incluindo, mas sem limitação aos gastos legais razoáveis que resultem do uso que o Usuário faça do Site, dos Conteúdos e dos Serviços. O Usuário reconhece que a CineSaci é um mero intermediário, alheio a qualquer relação que possa ser estabelecida entre si e aqueles que publiquem avisos, anúncios e/ou propostas por meio do Site. Em tal sentido, o Usuário entende que qualquer demanda originada de tais relações devem ser solucionadas entre as partes respectivas, não cabendo reclamações à CineSaci a respeito.'
									)
								]
							);
							echo NormasPainel(
								10,
								[
									NormasConteudo(
										10,
										1,
										1,
										'Geral',
										ListarSubtermos(
											[
												'A CineSaci reserva-se o direito de modificar, total ou parcialmente, estas Condições Gerais em qualquer momento. Caso realize alguma modificação, a CineSaci notificará o Usuário no endereço de e-mail registrado para utilizar o Site e os Serviços, por isso, é importante que os dados cadastrais estejam atualizados. O Usuário reconhece que a notificação, por parte da CineSaci, ao referido endereço de e-mail terá plena validez como notificação suficiente, e renuncia a qualquer tipo de impugnação com relação às notificações enviadas pela CineSaci a tal endereço de e-mail. Igualmente, se o Usuário persiste na utilização dos Serviços e/ou do Site, será considerado que aceitou implicitamente as novas Condições Gerais;',
												'Caso seja declarada a nulidade de alguma das cláusulas destas Condições Gerais, tal nulidade não afetará a validez das restantes, que manterão sua plena vigência e efeito;',
												'Estas Condições Gerais, junto com a Política de Privacidade constituem a totalidade do acordo entre Você e a CineSaci com relação ao uso do Site'
											],
											'ol'
										)
									)
								]
							);
							echo NormasPainel(
								11,
								[
									NormasConteudo(
										11,
										1,
										1,
										'Duração e Rescisão',
										'A prestação do Serviço do Site tem uma duração indeterminada. Sem prejuízo do anterior, a CineSaci está autorizada para dar por terminada ou suspender a prestação do Serviço do Site e/ou de qualquer dos Conteúdos em qualquer momento.'
									)
								]
							);
							echo NormasPainel(
								12,
								[
									NormasConteudo(
										12,
										1,
										1,
										'Localização',
										ListarSubtermos(
											[
												'CineSaci significa razão social CineSaci Comunicacao Ltda., com domicílio em Avenida Paulista, 666 13º andar, Bela Vista, São Paulo;',
												'O Site é <a href="#">www.cinesaci.com.br</a>',
												'Estas Condições Gerais são regidas pelas leis brasileiras. Fica eleito o foro da Comarca de São Paulo, Estado de São Paulo, como competente para dirimir quaisquer controvérsias relacionadas e estes Termos e Condições, independentemente de qualquer outro, por mais privilegiado que seja ou venha a ser, com exceção de reclamações apresentadas por Usuários que se enquadrem no conceito legal de consumidores, que poderão submeter tais reclamações ao foro de seu domicílio.'
											],
											'ol'
										)
									)
								]
							);
							?>
						</section>
					</article>
				</section>
			</section>
		</section>
	</section>
</main>

<?php
include_once "../components/Footer/index.php";
echo Footer("../");
?>
