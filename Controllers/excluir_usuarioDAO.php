<?php
session_start();
$tipo = $_SESSION['tipo'];
if($_SESSION['validacao']==1){
$level = 'root';
	if($level == $tipo){
		require_once('../Models/conectar.php');
		$db = new conectar();
		
		$id = $_GET['id'];
		$sql = "DELETE FROM usuarios WHERE id=$id";
		$delete = $db->apagarUsuario($sql);
		
		
	}else{
		header("Location: index_logado.php");
	}




}else{
header("Location: login_usuario.php");
}
?>