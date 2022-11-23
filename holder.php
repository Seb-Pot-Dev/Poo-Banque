<?php
Class holder{
    private $_firstname;
    private $_lastname;
    private $_dateofbirth;
    private $_city;
    private $_allaccounts;

    public function __construct(string $firstname, string $lastname, $dateofbirth, string $city,){
        $this->_firstname=$firstname;
        $this->_lastname=$lastname;
        $this->_dateofbirth=$dateofbirth;
        $this->_city=$city;
        $this->_allaccounts=[];
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

    public function getinfoholder(){
        echo "Le titulaire ".$this->_firstname." ".$this->_lastname." de ".$this->_city." né le ".$this->_dateofbirth." possède les comptes suivant: <br><br>".$this->_allaccounts;
    }
}