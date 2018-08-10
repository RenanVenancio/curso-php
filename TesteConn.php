<?php

$db = new PDO("mysql:host=localhost; dbname=base_dados; port=3308;", "root", "");

$stmt = $db -> prepare("SELECT nome_prod FROM meus_produtos WHERE nome_prod LIKE :ID");

$id = "%a%";

$stmt -> bindParam(":ID", $id);

$stmt -> execute();
var_dump ($stmt);
?>
