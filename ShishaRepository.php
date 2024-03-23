<?php
    include_once('databaseConn.php');
    

    class ShishaRepository{
      private $connection;

      public function __construct()
      {
          $conn= new DatabaseConn;
          $this->connection = $conn->startConnection();
      }


      $sql = "INSERT INTO shisha(Emri, Pershkrim, cmimi, img) VALUES (?,?,?,?)";

      $statement = $conn->prepare($sql);
      $statement->execute([$Emri, $Pershkrim, $cmimi,$img]);

      echo "<script>alert('U shtua me sukses!')</script>";
  }

  public function getAllShisha(){
    $conn = $this->connection;
        
    $sql = "SELECT * FROM shisha";
    $statement = $conn->query($sql);

    

    $vepat = $statement->fetchAll();
    return $shisha;
}


        //Pjesa tjeter e funksioneve CRUD:
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editshisha($id, $Emri, $Pershkrim, $cmimi,$img){
          $conn = $this->connection;
          
          $sql = "UPDATE vape SET Emri=?,Pershkrimi=?, cmimi=? ,img=? WHERE shisha_Id=?";

          $statement = $conn->prepare($sql);
          $statement->execute([$Emri, $Pershkrim, $Cmimi,$img ,$shisha_id]);

          echo "<script>alert('U ndryshua me sukses!')</script>";

        //delete

        function deleteshisha($id){
          $conn = $this->connection;
          
          $sql = "DELETE FROM shisha WHERE shisha_Id=?";

          $statement = $conn->prepare($sql);
          $statement->execute([$shisha_id]);
      }

        //shtese per update: merr studentin ne baze te Id

        function getshishaById($shisha_id){
          $conn = $this->connection;
          
          $sql = "SELECT * FROM shisha WHERE shisha_Id=?";

          $statement = $conn->prepare($sql);
          $statement->execute([$shisha_id]);
          $vape=$statement->fetch();

          return $shisha;
      }

  }

?>
?>