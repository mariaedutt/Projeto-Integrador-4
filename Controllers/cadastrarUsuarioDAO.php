<?php	
require_once('../Models/conectar.php');
$db = new conectar();

if(isset($_POST['submit'])){
  $usuario = $_POST['usuario'];
  $fone = $_POST['fone'];
  $email = $_POST['email'];
  $email2 = $_POST['email2'];
  $senha = $_POST['senha'];
  $senha2 = $_POST['senha2'];
  
   //Cria um salt aleatório
  $salt = md5("doguinho");
  
  //Encriptação usando o salt criado
  $codifica = crypt($senha, $salt);
  
  //segunda encriptação
  $senhaNova = hash('sha512', $codifica);
  
 if($usuario == '' || $fone == '' || $email == '' || $email2 == '' || $senha == '' || $senha2 == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 }elseif($email != $email2){
	 header("Location: index.php?erro=Os e-mail devem ser iguais!");
  }elseif($senha != $senha2){
	 header("Location: index.php?erro=As senhas devem ser iguais!"); 
 } else {
  $sql = "INSERT INTO usuarios(usuario, fone, email, senha, tipo) 
		VALUES('$usuario','$fone','$email','$senhaNova', 'comum')";
		
  $create = $db->cadastrarUsuario($sql);
 }
}
