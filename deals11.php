<?php
    include_once('databaseConn.php');

    class deals{
        private $connection;

        public function __construct()
        {
            $conn = new deals;
            $this->connection = $conn->startConnection();
        }

        public function insertTablet($tablet){
            $conn = $this->connection;

            $emri = $tablet->getEmri();
            $ngjyra =$tablet->getNgjyra();
            $cmimi = $tablet->getCmimi();
            $memoria = $tablet->getMemoria();
            $img = $tablet->getImg();
            $pershkrimi = $tablet->getPershkrimi();
            $edit = $tablet->getEdit();

            $sql = "INSERT INTO tablet(Emri, Ngjyra, Cmimi,Memoria,img,pershkrimi,edit) VALUES (?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllTabletet(){
            $conn = $this->connection;

            $sql = "SELECT * FROM tablet";
            $statement = $conn->query($sql);

            $tabletet = $statement->fetchAll();
            return $tabletet;
        }


        //Pjesa tjeter e funksioneve CRUD:
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editTablet($id, $emri, $ngjyra, $cmimi, $memoria,$img,$pershkrimi,$edit){
            $conn = $this->connection;
            $sql = "UPDATE tablet SET Emri=?,Ngjyra=?, Cmimi=?, Memoria=?, img=?, pershkrimi=?, edit=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $ngjyra, $cmimi, $memoria, $img, $pershkrimi, $edit, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deleteTablet($id){
            $conn = $this->connection;

            $sql = "DELETE FROM tablet WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getTabletById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM tablet WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $tablet=$statement->fetch();

            return $tablet;
        }

    }

?>