<?php

require_once("Consultas.php");
/*
$sql = new Sql();\ect("SELECT * FROM meus_produtos");


echo json_encode($usuarios);



$root = new Produtos();
$root->loadById(7);
echo $root -> getIdProd();


$lista = Produtos::getList();
echo json_encode($lista);


$busca = Produtos::search("LARANJA");
echo json_encode($busca);
*/
$prod = new Consultas();
$prod -> loadById(1);
$prod -> update("ABACAXI");

echo $prod;




?>
