<?php

require_once("cfg.php");


$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM meus_produtos");


echo json_encode($usuarios);

$root = new Produtos();
$root->loadById(3);





?>