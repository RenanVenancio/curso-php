<?php

class Produtos{
    
    private $idProd;
    private $nomeProd;
    private $precoCompra;
    private $precoVenda;
    private $uniMedida;
    
    
    	public function getIdProd(){
		return $this->idProd;
	}

	public function setIdProd($idProd){
		$this->idProd = $idProd;
	}

	public function getNomeProd(){
		return $this->nomeProd;
	}

	public function setNomeProd($nomeProd){
		$this->nomeProd = $nomeProd;
	}

	public function getPrecoCompra(){
		return $this->precoCompra;
	}

	public function setPrecoCompra($precoCompra){
		$this->precoCompra = $precoCompra;
	}

	public function getPrecoVenda(){
		return $this->precoVenda;
	}

	public function setPrecoVenda($precoVenda){
		$this->precoVenda = $precoVenda;
	}

	public function getUniMedida(){
		return $this->uniMedida;
	}

	public function setUniMedida($uniMedida){
		$this->uniMedida = $uniMedida;
	}
    
    
    public function __toString(){
        return json_encode(array(
        "id_prod" => $this->getIdProd(),
        "nome_prod" => $this->getNomeProd(),
        "preco_compra" => $this->getPrecoCompra(),    
        "preco_venda" => $this->getPrecoVenda(),
        "unid_medida" => $this->getUniMedida()
        ));
        
    }
    
    public function loadById($id){
        $sql = new Sql();
        $results = Sql -> select("SELECT *FROM meus_produtos WHERE id_prod = :ID", array("ID"=>$id));
        
        if (count($resuts) > 0){
            $row = $results = [0];
            
            $this -> setIdProd($row['id_prod']);
            $this -> setNomeProd($row['nome_prod']);
            $this -> setPrecoCompra($row['preco_compra']);
            $this -> setPrecoVenda($row['preco_venda']);
            $this -> setUniMedida($row['unid_medida']);
        }
        
    }
    
    
}





?>