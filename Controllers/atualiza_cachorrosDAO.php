<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $imagem = $_POST['imagem'];
  $desc = $_POST['descricao'];
  $tipo = $_POST['tipo'];
 if($nome == '' || $desc == '' ){
  $erro = "Atenção! Pelo menos os campos nome e descreção devem ser preenchidos!";
 } else {
  $sql = "UPDATE cachorros 
	SET nome = '$nome',
        descricao = '$desc',
		tipo = '$tipo'
	WHERE id = $id";  
	
  $update = $db->atualizarCachorros($sql);
 }
}
