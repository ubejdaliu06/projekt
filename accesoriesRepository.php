<?php
    include_once('databaseConn.php');
    

    class accesoriesRepository{
      private $connection;

      public function __construct()
      {
          $conn= new databaseConn;
          $this->connection = $conn->startConnection();
      }


      public function insertaccesories($Emri, $Pershkrim, $cmimi, $img){
        $conn = $this->connection;
        $sql = "INSERT accesories(Emri, Pershkrim, cmimi, img) VALUES (?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$Emri, $Pershkrim, $cmimi, $img]);
        echo "<script>alert('U shtua me sukses!')</script>";
    }

    public function getAllaccesories(){
      $conn = $this->connection;
      $sql = "SELECT * FROM accesories";
      $statement = $conn->query($sql);
      $accesories = $statement->fetchAll();
      return $accesories;
  }


        //Pjesa tjeter e funksioneve CRUD:
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editaccesories($id, $Emri, $Pershkrim, $cmimi, $img){
          $conn = $this->connection;
          $sql = "UPDATE accesories SET Emri=?, Pershkrim=?, cmimi=?, img=? WHERE id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$Emri, $Pershkrim, $cmimi, $img, $id]);
          echo "<script>alert('U ndryshua me sukses!')</script>";
      }

      public function deleteaccesories($id){
        $conn = $this->connection;
        $sql = "DELETE FROM accesories WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

        //shtese per update: merr studentin ne baze te Id
        public function getaccesoriesById($id){
          $conn = $this->connection; 
          $sql = "SELECT * FROM accesories WHERE id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$id]);
          $accesories = $statement->fetch();
          return $accesories;
      }
  }
  ?>