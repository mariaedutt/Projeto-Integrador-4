<?php
require_once('../Models/conectar.php');
$db = new conectar();
if(isset($_POST['submit'])){
 $email  = $_POST['email'];
 $senha = $_POST['senha']; 
  
  //Cria um salt aleatório
  $salt = md5("doguinho");
  
  //Encriptação usando o salt criado
  $codifica = crypt($senha, $salt);
  
  //segunda encriptação
  $senhaNova = hash('sha512', $codifica);
 
 if($email == '' || $senha == ''){
  $erro = "Atenção! Todos os campos devem ser preenchidos!";
 } else {	
	$sql = "SELECT email,senha from usuarios 
	WHERE email='$email' AND senha='$senhaNova'";
	$logar = $db->logar($sql);
 }
}
?>