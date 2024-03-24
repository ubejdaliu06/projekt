<?php
class deals{
    private $id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Pershkrim;
    private $Cmimi;
    private $img;

  


    public function __construct($e, $n, $c,$img){
        $this->Emri=$e;
        $this->Pershkrim=$n;
        $this->Cmimi=$c;
        $this ->img=$img;
      
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
        return $this->Pershkrim;
    }
    public function setPershkrimi($m){
        $this->Pershkrim = $m;
    }
    public function getImg(){
        return $this->img;
    }
    public function setImg($m){
        $this->img = $m;
    }
   

    public function toString(){
        return "Emri: ".$this->Emri." dhe ngjyra ".$this->Pershkrim;
    }
}
?>