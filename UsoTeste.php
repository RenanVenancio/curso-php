<?php

require_once("consultas.php");
require_once("prods.php");

$prod = new prods();
$prod->selectById(2);
echo $prod->getNomeProd();





?>
