<?php

class consultas extends PDO{

    private $db;

    public function __construct(){   //Essa função é chamada quando a classe é istanciada
        $db = new PDO("mysql:host=localhost; dbname=base_dados; port=3308;", "root", "");
    }

    public function consulta($consultaBruta, $parametros = array()){
        $resultado = this -> db -> prepare($consultaBruta); 
    }

$stmt = $db -> prepare("SELECT * FROM meus_produtos WHERE nome_prod LIKE :ID ;");

$id = "%a%";

$stmt -> bindParam(':ID', $id);

$stmt -> execute();
$results = $stmt -> fetchAll();

echo  json_encode($results);
}
?>
