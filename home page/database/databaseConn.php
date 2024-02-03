<?php
class databaseConn{
    
    private $host = "localhost";
    private $username = "root";
  
    private $db = "vape";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            //echo "Connection failed "; per testim
            return null;
        }else{
            //echo "Connection successful!"; per testim
            return $conn;
        }

    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
?>
  