<?php
  
function startConnection(){
    $dsn = "mysql:host=localhost;dbname=vape";
  
        $username = "root";
    try{
        
        // Cakton atributet e PDO për raportimin e gabimeve
        $conn = new PDO($dsn, $username);
         // Cakton atributet e PDO për raportimin e gabimeve
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Kontrollon nëse lidhja është suksesshme
        if(!$conn){
            //echo "Connection failed "; per testim
            return null;
        }

    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}

?>


   
