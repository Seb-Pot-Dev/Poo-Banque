<?php

Class account{
    private $_type;
    private $_initialbalance;
    private $_currency;
    private holder $_holder;

    public function __construct(string $type, float $initialbalance, string $currency, holder $holder){
        $this->_type=$type;
        $this->_initialbalance= round($initialbalance, 2); // on limite $initialbalance a 2 chiffre après la virgule (les centimes)
        $this->_currency=$currency;
        $this->_holder=$holder;
        $this->_holder->addaccount($this); //on assigne l'objet en cours  "account" comme faisant partie de l'attribut-tableau "allaccounts" de l'objet "holder" grace a la fonction "addaccount"

    }
   

    public function gettype(){
        return $this->_type;
    }
    public function getinitialbalance(){
        return $this->_initialbalance;
    }   
    public function getcurrency(){
        return $this->_currency;
    }
    public function getholder(){
        return $this->_holder;
    }

    public function __toString(){
        return $this->_holder."possède un ".$this->_type . " avec un solde de : " . $this->_initialbalance . " " . $this->_currency."<br>";
    }

    public function getinfoaccount(){
         $this->_holder."possède un ".$this->_type . " avec un solde de : " . $this->_initialbalance . " " . $this->_currency."<br>";
    }

}

