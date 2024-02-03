<?php
class databaseConn{
    
    private $host = "localhost";
    private $username = "root";
   
    private $db = "vape";

function startConnection(){
    try{
        $con = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$con){
            //echo "Connection failed "; per testim
            return null;
        }else{
            //echo "Connection successful!"; per testim
            return $con;
        }

    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
?>
  