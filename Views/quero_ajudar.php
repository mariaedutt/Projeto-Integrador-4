<?php
session_start();
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
				<li>
					<?php
					if(isset($_SESSION['email'])){
						echo "<a href='index_logado.php'> inicio </a>" ;
					}else{
						echo "<a href='index.php'> inicio </a>";
					}
					?>
				</li>
				<li><a href="quero_adotar.php"> quero adotar </a></li>
				<li><a href="quero_ajudar.php"> quero ajudar </a></li>
				<li><a href="fotos.php"> fotos </a></li>
				<li><a href="quem_somos.php"> quem somos </a></li>
				<li><a href="contato.php"> contato </a></li>
			</ul>
		</nav>

		<div class="containerajudar">
			
			<h1> Ajude-nos </h1>
			<h2>Temos mais 2 mil cachorros precisando de ração! </h2> 
			<section class="sessaocontato">
				<div id="foto">
					<img src="imagens\ico3.png"/>
				</div>
				<div id="dados">
					
					<p>Faça doações para a nossa instinuição, ou seja madrinho.</p>
					<p>Sua ajuda é muito importante para nós, aceitamos roupas, caminhas, cobertas, ração.</p>
					</br></br>
					<h3>Banco Bradesco </br>
						Agencia: 002021 </br>
						Conta: 14542-1</h3>
				</div>
			
			</section>
	
				
		</div>
		
		
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
				
	</body>
</html>