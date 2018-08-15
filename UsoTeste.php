<?php

require_once("Consultas.php");
require_once("prods.php");

$prod = new prods();
$prod->loadById(3);




?>
