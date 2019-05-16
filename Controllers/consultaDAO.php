<?php	
require_once('../Models/conectar.php');
$db = new conectar();
$sql = "SELECT * FROM cachorros";
$read = $db->consulta($sql);
?>
