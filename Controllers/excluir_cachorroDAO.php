<?php
require_once('../Models/conectar.php');
$db = new conectar();

$id = $_GET['id'];
$sql = "DELETE FROM cachorros WHERE id=$id";
$delete = $db->apagarCachorros($sql);

?>