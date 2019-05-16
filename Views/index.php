<?php
require_once('../Controllers/cadastrarUsuarioDAO.php');
session_start();

?>

<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="utf-8">
		<title>Adote um amigo</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		
		<nav class="menu">
		<div class="cabecalho">
			<?php
				if(isset($_SESSION['email'])){
					echo "Oi!" . $_SESSION['usuario'] . " | <a href='../Controllers/deslogar.php'> sair </a>" ;
				}else{
					echo "<a href='login_usuario.php'>Oi! Faça seu login </a>";
				}
			?>
		</div>
			<ul class="links">
				<img src="imagens/logo.png" class="logo"/>
				<li><a href="index.php"> inicio </a></li>
				<li><a href="quero_adotar.php"> quero adotar </a></li>
				<li><a href="quero_ajudar.php"> quero ajudar </a></li>
				<li><a href="fotos.php"> fotos </a></li>
				<li><a href="quem_somos.php"> quem somos </a></li>
				<li><a href="contato.php"> contato </a></li>
			</ul>
		</nav>
				
		<header class="banner">
		</header>

		<div class="container">
			
			<div class="cadastro">
				<h1> Encontre seu novo amigo!</h1>
				<h3>Cadastre-se:</h3>
				<form method="POST" name="cadastrar" class="formcadastrar" action="index.php"> <!-- Função Action-->
					<input type="text" name="usuario" placeholder="Digite seu nome completo"	/>
					
					<input type="email" name="email" placeholder="Digite seu E-mail" />
						
					<input type="email" name="email2" placeholder="Confirme seu E-mail" />
												
					<input type="text" name="fone" id="fone" placeholder="Digite seu telefone" />
											
					<input type="password" name="senha" placeholder="Crie uma senha" />
						
					<input type="password" name="senha2" placeholder="Confirme a senha criada" />
					</br>
					<input type="submit" id="cadastrar" name="submit" class="botao" value="Cadastrar"/>
				</form>
			</div>
			
			<div class="destaques">
				<div class="row">
				<?php
					require_once('../Controllers/consultaDAO.php');
						while($linha = $read->fetch_assoc()){	
							$id = $linha['id'];
							$nome = $linha['nome'];
							$imagem = $linha['imagem'];
							$descricao = $linha['descricao'];
							$tipo = $linha['tipo'];
							$value = 'novo';
							if ($tipo == $value){
								$_SESSION['validacao']=1;
								$_SESSION['tipo'] = $tipo;
								echo 	"<div class='cachorros'>";			
								echo	"<a href='processo_adoção.php'>";
											if(empty($imagem)){
												echo "<img src='imagens/sem-imagem.png' class='medio'>";		
											}else{
												echo "<img src='imagens/$imagem' class='medio'>";
											}
										echo "
											<h3>$nome</h3>
											<p>$descricao</p>
										 </a>
										</div>";	
							}else{
								$_SESSION['validacao']=1;
								$_SESSION['tipo'] = $tipo;

							}
				
						}  
				?>
				</div>
			</div>
				
		</div>
		
		<section class="concientizacao">
			<div class="con1">
				<img src="imagens/ico1.png" width="100px" height="150px"/>
			</div>
			<div class="con1">
				<p>Ao adotar, você ajuda a reduzir o númeroero de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!</p>
			</div>
			<div class="con1">
				<img src="imagens/ico2.png"/>
			</div>
			<div class="con1">
				<p>Pensando bem, a pergunta é outra: se você pode mudar o destino de um animal carente, por que você não faria isso?</p>
			</div>
			<div class="con1">
				<img src="imagens/ico3.png"/>
			</div>
		</section>
		
		<footer class="rodape">
		
			<section class="colunasrod">
				<div class="c1">
					<h5>Ajude nossa causa</h5>
					<p> >> Quem somos </br>
						>> Inpire-se </br>
						>> Conheça nossa história </br>
					</p>
				</div>
				<div class="c1">
					<h5>Melhores Amigos</h5>
					<p> >> Seja um padrinho </br>
						>> Guarda responsável </br>
						>> Dicas e cuidados </br>
					</p>
				</div>
				<div class="c1">
					<h5>Contato</h5>
					<p> >> Fale conosco </br>
						>> Sobre nós </br>
						>> Perguntas Frequentes </br>
						>> Termos de uso  </br>
					</p>
				</div>
				<div class="c1">
					<img src="imagens/logob.png"/>
					<h4>CONTATO@ADOTEDOGUINHO.COM.BR</h4>
					<a href="https://www.instagram.com/">
					<img src="imagens/insta.png" width="45px" height="45px"/>
					</a>
					<a href="https://www.facebook.com/">
					<img src="imagens/face.png" width="45px" height="45px"/>
					</a>
					<a href="https://www.linkedin.com/feed/">
					<img src="imagens/link.png" width="45px" height="45px"/>
					</a>
		
				</div>
			</section>
			Copyright &copy; 2019 - Todos os direitos reservados | Trabalho Senac Informática
		</footer>
		
		<?php
		if(isset($erro)){
		 echo "<div id='erro'>".$erro."</div>";
		}
		if(isset($_GET['msg'])){
		 echo "<div id='msg'>".$_GET['msg']."</div>";
		}
		if(isset($_GET['erro'])){
		 echo "<div id='erro'>".$_GET['erro']."</div>";
		}
		
		?>
		
		
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/erro.js"></script>
		<script src="js/msg.js"></script>

	</body>
</html>