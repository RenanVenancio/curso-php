<?php

class Sql extends PDO{

    private $conn;



    public function __construct(){
        $this -> conn = new PDO("mysql:host=localhost; port=3308; dbname=base_dados", "root", "");
    }


    private function setParams($statement, $parameters = array()){

        foreach ($parameters as $key => $value){

            $this -> setParam($statement, $key, $value);
            echo "Função setParams Chamada ". "key=". $key . "  parameters="; print_r ($parameters); echo "<br>";
        }



    }

    private function setParam($statement, $key, $value){

        $statement -> bindParam($key, $value);
echo "Função setParam Chamada ". "key=". $key . "  parameters="; echo "VALUE=" .$value; echo "<br>";
    }



    public function query($rawQuery, $params = array()){

        $stmt = $this -> conn -> prepare($rawQuery);
        $this -> setParams($stmt, $params);
        $stmt -> execute();
        return $stmt;

    }

    public function select($rawQuery, $params = array()){
echo "FAZENDO SELECT Consulta bruta = " . $rawQuery. "Parametros ="; print_r($params); echo "<br>";
        $stmt = $this-> query($rawQuery, $params);
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);


    }


}


?>
