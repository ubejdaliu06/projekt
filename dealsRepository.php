<?php
    include_once('databaseConn.php');
    

    class dealsRepository{
      private $connection;

      public function __construct()
      {
          $conn= new databaseConn;
          $this->connection = $conn->startConnection();
      }


      public function insertdeals($Emri, $Pershkrim, $cmimi, $img){
        $conn = $this->connection;
        $sql = "INSERT deals(Emri, Pershkrim, cmimi, img) VALUES (?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$Emri, $Pershkrim, $cmimi, $img]);
        echo "<script>alert('U shtua me sukses!')</script>";
    }

    public function getAlldeals(){
      $conn = $this->connection;
      $sql = "SELECT * FROM deals";
      $statement = $conn->query($sql);
      $deals = $statement->fetchAll();
      return $deals;
  }


        //Pjesa tjeter e funksioneve CRUD:
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editdeals($id, $Emri, $Pershkrim, $cmimi, $img){
          $conn = $this->connection;
          $sql = "UPDATE deals SET Emri=?, Pershkrim=?, cmimi=?, img=? WHERE id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$Emri, $Pershkrim, $Cmimi, $img, $id]);
          echo "<script>alert('U ndryshua me sukses!')</script>";
      }

      public function deletedeals($id){
        $conn = $this->connection;
        $sql = "DELETE FROM deals WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

        //shtese per update: merr studentin ne baze te Id
        public function getdealsById($id){
          $conn = $this->connection; 
          $sql = "SELECT * FROM deals WHERE id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$id]);
          $deals = $statement->fetch();
          return $deals;
      }
  }
  ?>