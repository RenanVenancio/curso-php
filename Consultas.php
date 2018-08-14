<?php

class Consultas extends PDO{

    private $db;

    public function __construct(){   //Essa função é chamada quando a classe é istanciada
<<<<<<< HEAD
        $db = new PDO("mysql:host=localhost; dbname=base_dados; port=3306;", "root", "");
    }

    public function consulta($consultaBruta, $parametros = array()){
        $resultado = this -> db -> prepare($consultaBruta);
        $this -> setParams();
        $resultado  -> execute();
        return $resultado;
    }

    public function setParamOne($resutado, $parametros = array()){
      foreach ($parametros as $key => $value) {
        $this -> setParamTwo($resutado, $key, $value);
      }
    }

    private setParamTwo($resutado, $key, $value){
      $resultado = bindParam($key, $value);
=======
        $this->db = new PDO("mysql:host=localhost; dbname=base_dados; port=3306;", "root", "");
    }

    public function query($rawQuery, $params = array()){
        $results = $this -> db -> prepare($rawQuery);
        $this ->setParamOne($results, $params);
        $results -> execute();
        return $results;
    }


    public function setParamOne($results, $params = array()){
        foreach ($params as $key => $value) {
            $this -> setParamTwo($results, $key, $value);

        }

    }

    public function setParamTwo($results, $key, $value){
        $results -> bindParam($key, $value);
>>>>>>> 45c45c4800ff3c99d2662e78125afc89079c1202
    }


}
?>
