<?php

Class account{
    private $_type;
    private $_initialbalance;
    private $_currency;
    private $_holder;

    public function __construct(string $type, float $initialbalance, string $currency, holder $holder){
        $this->_type=$type;
        $this->_initialbalance=$initialbalance;
        $this->_currency=$currency;
        $this->_holder=addholder($this);
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
}

