<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Controllers/atualiza_usuarioDAO.php');
		$id = $_GET['id'];	
		$sql = "SELECT * FROM usuarios WHERE id=$id";
		$linha = $db->consulta($sql)->fetch_assoc();
	}else{
		header("Location: index_logado.php");
	}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Editar Usuário</title>
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
			<div class="editar">
				<h1> Editar Usuário </h1>

				<form method="POST" class="atualizar" 
				action="editar_usuario.php">
					<input type="hidden" name="id" 
					value="<?php echo $linha['id'];?>" />
					
					<input type="text" name="usuario" 
					value="<?php echo $linha['usuario'];?>" />
					
					<input type="text" name="fone" 
					value="<?php echo $linha['fone'];?>" />
					
					<input type="email" name="email" 
					value="<?php echo $linha['email'];?>" />
					
					<h4>Tipo de Usuário:</h4>
					<label for="root" class="radio">
					<input type="radio" name="tipo" value="root" id="root"
					/>ROOT</label>
					
					<label for="comum" class="radio">
					<input type="radio" name="tipo" value="comum" id="comum"
					checked />COMUM</label>				

					<input type="submit" class="des" name="submit"
					value="Atualizar" />
				</form>
				<a href="gerenciar_usuarios.php"><button class='des'>Voltar</button></a>
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