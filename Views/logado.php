<?php 
	require_once('../Models/conectar.php');
	$db = new conectar();
	session_start();
	$email = $_SESSION['email'];
		if($_SESSION['validacao']==1){
			$sql = "SELECT * FROM usuarios WHERE email='$email' ";
			$consulta = $db->consulta($sql);
			session_name('logado');
			while($linha = $consulta->fetch_assoc()){
				$tipo = $linha['tipo'];
				$usuario = $linha['usuario'];
				$value = 'root';
				if ($tipo == $value){
					session_start();
					$_SESSION['validacao']=1;
					$_SESSION['tipo'] = $tipo;
					$_SESSION['usuario'] = $usuario;
					header("Location: admin.php");
				}else{
					session_start();
					$_SESSION['validacao']=1;
					$_SESSION['tipo'] = $tipo;
					$_SESSION['usuario'] = $usuario;
					header("Location: index_logado.php");
				}
			}
		}else{
			header("Location: login_usuario.php");
		}
?>