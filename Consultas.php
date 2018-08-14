<?php

class consultas extends PDO{

    private $db;

    public function __construct(){   //Essa função é chamada quando a classe é istanciada
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
    }


}
?>
