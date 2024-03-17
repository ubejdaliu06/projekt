<?php

class shisha{
    private $shisha_ID; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Pershkrim;
    private $image;
    private $cmimi;
    

    public function __construct($e, $n, $m,$i){
        $this->Emri=$e;
        $this->Pershkrim=$n;
        $this->image=$m;
        $this->cmimi=$i;
    }
    
    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($e){
        $this->Emri = $e;
    }

    public function getPershkrim(){
        return $this->Pershkrim;
    }
    public function setPershkrim($n){
        $this->Pershkrim = $n;
    }

    public function getImage(){
        return $this->image;
    }
    
    public function setImage($c){
        $this->image = $c;
    }

    public function getCmimi(){
        return $this->cmimi;
    }
    public function setCmimi($m){
        $this->cmimi = $m;
    }
   
    
    public function __toString(){
        return "Emri: ".$this->Emri." dhe ngjyra ".$this->Pershkrim;
    }
}
?>