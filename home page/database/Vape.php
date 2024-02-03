<?php
class Vape{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Pershkrimi;
    private $Cmimi;
  


    public function __construct($e, $n, $c){
        $this->Emri=$e;
        $this->Pershkrimi=$n;
        $this->Cmimi=$c;
      
    }

    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($e){
        $this->Emri = $e;
    }

    

    public function getCmimi(){
        return $this->Cmimi;
    }

    public function setCmimi($c){
        $this->Cmimi = $c;
    }

    public function getPershkrimi(){
        return $this->Pershkrimi;
    }
    public function setPershkrimi($m){
        $this->Pershkrimi = $m;
    }
   

    public function toString(){
        return "Emri: ".$this->Emri." dhe ngjyra ".$this->Pershkrimi;
    }
}
?>