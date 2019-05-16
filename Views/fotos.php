<?php
session_start();
?>

<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="utf-8">
		<title>Adote um amigo</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
		<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
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

		<div class="container">
		 <div class="carrosel">	
			<ul class="bxslider">
				<li><img src="imagens/slider/zeca.jpg" /></li>
				<li><img src="imagens/slider/théo.jpg" /></li>
				<li><img src="imagens/slider/masha.jpg" /></li>
				<li><img src="imagens/slider/marley1.jpg" /></li>
				<li><img src="imagens/slider/lindinha.jpg" /></li>
				<li><img src="imagens/slider/kira.jpg" /></li>
				<li><img src="imagens/slider/juca.jpg" /></li>
				<li><img src="imagens/slider/hércules.jpg" /></li>
				<li><img src="imagens/slider/belinha.jpg" /></li>
				<li><img src="imagens/slider/bob1.jpg" /></li>
			</ul>
		</div>	
				
		</div>
		
		<section class="concientizacao">
			<div class="con1">
				<img src="imagens/ico1.png" width="100px" height="150px"/>
			</div>
			<div class="con1">
				<p>Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!</p>
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
				
		
		<script type="text/javascript">
			$('.bxslider').bxSlider({
				auto: true,
				pause: 8000,
				speed: 1000,
			});;
		</script>
		
	</body>
</html>