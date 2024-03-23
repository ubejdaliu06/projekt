<?php
    include_once('databaseConn.php');
    

    class ShishaRepository{
      private $connection;

      public function __construct()
      {
          $conn= new databaseConn;
          $this->connection = $conn->startConnection();
      }


      public function insertShisha($Emri, $Pershkrim, $cmimi, $img){
        $conn = $this->connection;
        $sql = "INSERT INTO shisha(Emri, Pershkrim, cmimi, img) VALUES (?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$Emri, $Pershkrim, $cmimi, $img]);
        echo "<script>alert('U shtua me sukses!')</script>";
    }

    public function getAllShisha(){
      $conn = $this->connection;
      $sql = "SELECT * FROM shisha";
      $statement = $conn->query($sql);
      $shisha = $statement->fetchAll();
      return $shisha;
  }


        //Pjesa tjeter e funksioneve CRUD:
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editShisha($id, $Emri, $Pershkrim, $cmimi, $img){
          $conn = $this->connection;
          $sql = "UPDATE shisha SET Emri=?, Pershkrim=?, cmimi=?, img=? WHERE shisha_Id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$Emri, $Pershkrim, $cmimi, $img, $id]);
          echo "<script>alert('U ndryshua me sukses!')</script>";
      }

      public function deleteShisha($shisha_id){
        $conn = $this->connection;
        $sql = "DELETE FROM shisha WHERE shisha_Id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$shisha_id]);
    }

        //shtese per update: merr studentin ne baze te Id
        public function getShishaById($shisha_id){
          $conn = $this->connection; 
          $sql = "SELECT * FROM shisha WHERE shisha_Id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$shisha_id]);
          $shisha = $statement->fetch();
          return $shisha;
      }
  }
  ?>