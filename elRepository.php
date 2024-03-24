<?php
    include_once('databaseConn.php');
    

    class elRepository{
      private $connection;

      public function __construct()
      {
          $conn= new databaseConn;
          $this->connection = $conn->startConnection();
      }


      public function insertel($Emri, $Pershkrim, $cmimi, $img){
        $conn = $this->connection;
        $sql = "INSERT el(Emri, Pershkrim, cmimi, img) VALUES (?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$Emri, $Pershkrim, $cmimi, $img]);
        echo "<script>alert('U shtua me sukses!')</script>";
    }

    public function getAllel(){
      $conn = $this->connection;
      $sql = "SELECT * FROM el";
      $statement = $conn->query($sql);
      $el = $statement->fetchAll();
      return $el;
  }


        //Pjesa tjeter e funksioneve CRUD:
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editel($id, $Emri, $Pershkrim, $cmimi, $img){
          $conn = $this->connection;
          $sql = "UPDATE el SET Emri=?, Pershkrim=?, cmimi=?, img=? WHERE id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$Emri, $Pershkrim, $Cmimi, $img, $id]);
          echo "<script>alert('U ndryshua me sukses!')</script>";
      }

      public function deleteel($id){
        $conn = $this->connection;
        $sql = "DELETE FROM el WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

        //shtese per update: merr studentin ne baze te Id
        public function getelById($id){
          $conn = $this->connection; 
          $sql = "SELECT * FROM el WHERE id=?";
          $statement = $conn->prepare($sql);
          $statement->execute([$id]);
          $el = $statement->fetch();
          return $el;
      }
  }
  ?>