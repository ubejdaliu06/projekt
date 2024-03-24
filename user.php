<?php

class user{
    private $Customer_ID; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Name;
    private $Surname;
    private $Email_Adress;
  
    private $password;
  

   
    
    
  


    public function __construct($Name,$Surname, $Email_Adress,$password){
        $this->Name=$Name;
        $this->Surname=$Surname;
        $this->Email_Adress=$Email_Adress;
       
        $this ->password=$password;
     
     
      
    }

    public function getName(){
        return $this->Name;
    }
    public function setName($e){
        $this->Name = $e;
    }

    public function getSurname(){
        return $this->Surname;
    }

    public function setSurname($c){
        $this->Surname = $c;
    }

    public function getEmail_Adress(){
        return $this->Email_Adress;
    }
    public function setEmail_Adress($m){
        $this->Email_Adress = $m;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setpassword($m){
        $this->password = $m;
    }


    public function toString(){
        return "Emri: ".$this->Name." dhe username ".$this->Username;
    }
}
?>
