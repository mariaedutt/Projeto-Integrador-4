<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $senha = $_POST['senha'];
  $senha2 = $_POST['senha2'];
  
   //Cria um salt aleatório
  $salt = md5("doguinho");
  
  //Encriptação usando o salt criado
  $codifica = crypt($senha, $salt);
  
  //segunda encriptação
  $senhaNova = hash('sha512', $codifica);

 if($senha == '' || $senha2 == '' ){
	header("Location: ../Views/mudar_senha.php?id=$id&erro=Todos os campos devem ser preenchidos!");
 }elseif($senha != $senha2){  
	header("Location: ../Views/mudar_senha.php?id=$id&erro=As senhas devem ser iguais!");
 } else {
	move_uploaded_file($_FILES['avatar']['tmp_name'], $destino.$avatar); 
	$sql = "UPDATE usuarios 
		SET senha = '$senhaNova'
	WHERE id = $id";  
	
  $update = $db->atualizarUsuario($sql);
 }
}
