<?php
require 'account.php';
Class holder{
    private $_firstname;
    private $_lastname;
    private $_dateofbirth;
    private $_city;
    private $_allaccounts;

    public function __construct(string $firstname, string $lastname, $dateofbirth, string $city,){
        $this->_firstname=$firstname;
        $this->_lastname=$lastname;
        $this->_dateofbirth=new DateTime ($dateofbirth);
        $this->_city=$city;
        $this->_allaccounts=[];
    }

    public function addaccount($accounts){
        $this->_allaccounts[]=$accounts;
    }

    public function getfirstname(){
        return $this->_firstname;
    }
    public function getlastname(){
        return $this->_lastname;
    }   
    public function getdateofbirth(){
        return $this->_dateofbirth;
    }
    public function getcity(){
        return $this->_city;
    }
    public function getallaccounts(){
        return $this->_allaccounts;
    }
    public function getAge()
    {
        $now =  new Datetime(); // pas d'argument datetime pour avoir date du jour
        $age=$this->_dateofbirth->diff($now); //diff car pas desoustraction possible avec des date (datetime n'est pas float ou int)
        return $age->y." ans ";
        
    }
   
    public function getinfoholder(){
        $now =  new Datetime(); // pas d'argument datetime pour avoir date du jour
        $age = $this->_dateofbirth->diff($now); //diff car pas desoustraction possible avec des date (datetime n'est pas float ou int)
        $age = $age->y." ans ";
        echo "<b>Comptes de ".$this->_firstname." ".$this->_lastname." agé de ".$age." et originaire de ".$this->_city."</b><br><br>";
        foreach ($this->_allaccounts as $key){
            echo $key;
        }
        echo "-----------------------<br>";
    }
    public function __toString(){
        return $this->_firstname." ".$this->_lastname." ";
    }
}

