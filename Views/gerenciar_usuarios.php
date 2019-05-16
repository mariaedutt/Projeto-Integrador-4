<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		
	}else{
		header("Location: index_logado.php");
	}
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
		</nav>
		
		<div class="contato">
			
			<h1> LISTA DE USUÁRIOS </h1>
			
			<section class="sessaocontato">
				<div class="tabela_usuario">
						
					
						<table class="tabela" cellspacing="0">
							<tr>
								
								<th>NOME</th>
								<th>E-MAIL</th>
								<th>TIPO<th>								
								<th>DATA</th>								
								<th>EDITAR</th>
								<th>EXCLUIR</th>
							</tr>
							<?php
							require_once('../Controllers/usuarioDAO.php');
							$i = 1;
							while($linha = $read->fetch_assoc()){
								$id = $linha['id'];
								$usuario = $linha['usuario'];
								$email = $linha['email'];
								$tipo = $linha['tipo'];
								$data = $linha['data'];
								$data = date('d/m/Y H:i:s',strtotime($data));
								
								echo "	<tr>
											<td>$usuario</td>
											<td>$email</td>
											<td>$tipo</td>
											<td>$data</td>
											
											<td><a href='mudar_senha.php?id=$id'>
											<button> Mudar Senha </button></a></td>
												
											<td><a href='editar_usuario.php?id=$id'>
											<img src='imagens/edit.png'/></a></td>";
											
										if($tipo == "root"){
											echo "<td>Não</td>";
											}else{	
											echo "							
											<td><a onclick='return confirm(\"Você tem certeza que deseja excluir o usuário?\")' href='../Controllers/excluir_usuarioDAO.php?id=$id'>
											<img src='imagens/delete.png'; /></a></td>
										</tr>";
										}
							}  
							?>
						</table>
						
						<a href="admin.php"><button class='des'>Voltar</button></a>
						
					</div>
						
						<?php
							if(isset($_GET['msg'])){
							echo "<div id='msg'>".$_GET['msg']."</div>";
							}
						?>
						
						<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
						<script src="js/msg.js"></script>
		
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
				
	</body>
</html>
<?php
}else{
header("Location: login_usuario.php");
}
?>