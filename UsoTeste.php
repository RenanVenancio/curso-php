<?php

require_once("consultas.php");
require_once("prods.php");

$prod = new prods();
$prod->loadById(2);
echo $prod->getNomeProd();





?>
