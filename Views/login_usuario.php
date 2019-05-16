<?php
require_once('../Controllers/logarDAO.php');
?>

<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="utf-8">
		<title>Adote Doguinho</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		
		<nav class="menu">
			<div class="cabecalho">
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
		
		<div class="contato">
			
			<h1> LOGIN </h1>
			
			<section class="sessaocontato">
				<div class="login1">
						
					<form method="POST" name="logar" action="login_usuario.php">
						<input type="text" name="email" placeholder="E-mail" />
						<input type="password" name="senha" placeholder="Senha" />
						<input type="submit" id="logar" name="submit" value="Entrar" />
					</form>
					<p>
					<a href="index.php">Voltar</a>
					</p>
				</div>
				
				<div id="dados">
					<h2>Instituição Adote Doguinho </h2> 
					<p></p>
				</div>
			
			</section>
							
		</div>
		
		<footer class="rodape">
		
			<section class="colunasrod">
				<div class="c1">
					<h5>Ajude nossa causa</h5>
					<p> >> Quem somos </br>
						>> Inpire-se </br>
						>> Conhe?nossa hist?? </br>
					</p>
				</div>
				<div class="c1">
					<h5>Melhores Amigos</h5>
					<p> >> Seja um padrinho </br>
						>> Guarda respons?l </br>
						>> Dicas e cuidados </br>
					</p>
				</div>
				<div class="c1">
					<h5>Contato</h5>
					<p> >> Fale conosco </br>
						>> Sobre nós</br>
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
			Copyright &copy; 2019 - Todos os direitos reservados | Trabalho Senac Inform?ca
		</footer>
				
				<?php
		if(isset($erro)){
		 echo "<div id='erro'>".$erro."</div>";
		}
		?>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/erro.js"></script>		
		
	</body>
</html>