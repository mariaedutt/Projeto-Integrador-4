<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/cadastrarCachorroDAO.php');
	}else{
		header("Location: index_logado.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar Cachorros</title>
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
		</nav>
		
		<div class="containerEditar">
			
			<h1> Cadastrar um Novo Doguinho </h1>
			

			
			<div class="editar">
				
			
				<form method="POST" class="atualizar" 
				action="cadastrar_cachorro.php">

					<input type="text" name="nome" placeholder="Nome do Doguinho"/>
					<p>Descrição do Doguinho</p>
					
					<textarea name="descricao" placeholder="Descrição do Produto"></textarea>
					
					<p>Cachorro Novo:</p>
					<label for="novo" class="radio">
					<input type="radio" name="tipo" value="novo" id="novo"
					/>SIM</label>
					
					<label for="" class="radio">
					<input type="radio" name="tipo" value=" " id="nãodestaque"
					checked />NÃO</label>
					
					<input type="submit" class="botao" name="submit"
					value="Cadastrar" />
				</form>
				<a href="gerenciar_cachorros.php"><button class='des'>Voltar</button></a>
			</div>
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
			Copyright &copy; 2019 - Todos os direitos reservados | Trabalho Senac Informática
		</footer>
		
		<?php
			if(isset($_GET['msg'])){
			echo "<div id='msg'>".$_GET['msg']."</div>";
			}
		?>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/msg.js"></script>
		
				
	</body>
	
</html>
<?php
}else{
header("Location: login_usuario.php");
}
?>