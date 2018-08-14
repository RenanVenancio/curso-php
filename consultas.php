<?php

class Consultas extends PDO{

    private $db;

    public function __construct(){   //Essa função é chamada quando a classe é istanciada

        $db = new PDO("mysql:host=localhost; dbname=base_dados; port=3308;", "root", "");
    }

    public function consulta($consultaBruta, $parametros = array()){
        $resultado = $this -> db -> prepare($consultaBruta);
        $this -> setParamOne($resultado, $parametros);
        $resultado  -> execute();
        return $resultado;
    }

    public function setParamOne($resutado, $parametros = array()){
      foreach ($parametros as $key => $value) {
        $this -> setParamTwo($resutado, $key, $value);
      }
    }

    public function setParamTwo($resutado, $key, $value){
      $resultado -> bindParam($key, $value);

    }

    public function query($rawQuery, $params = array()){
        $results = $this -> db -> prepare($rawQuery);
        $this ->setParamOne($results, $params);
        $results -> execute();
        return $results;
    }


    }




?>
