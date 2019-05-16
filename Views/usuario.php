<?php 
session_start();
if($_SESSION['validacao']==1){
?>
<h1>Usuario Logado!</h1>


<?php
}else{
header("Location: login_usuario.php");
}
?>