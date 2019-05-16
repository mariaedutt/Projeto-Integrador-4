<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $nome = $_POST['nome'];
  $imagem = $_POST['sem_avatar.png'];
  $descricao = $_POST['descricao'];
  $tipo = $_POST['tipo'];
 if($nome == '' || $descricao == ''){
  $erro = "Atenção! No mínimo os campos Nome e Descrição devem ser preenchidos!";
 } else {
  $sql = "INSERT INTO cachorros(nome, imagem, descricao, tipo) 
		VALUES('$nome','$imagem','$descricao','$tipo')";
		
  $create = $db->cadastrarCachorros($sql);
 }
}
?>