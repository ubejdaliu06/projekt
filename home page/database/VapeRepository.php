
<?php
    include_once('databaseConn.php');

    class VapeRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConn;
            $this->connection = $conn->startConnection();
        }

        //kur kemi parametra kryesisht e pergatisim sql per marrjen e parametrave me prepare
        //dhe e bejme lidhjen e parametrave permes metodes execute
        //Pikepyetjet neper queries (?) zevendesohen nga parametrat te metoda execute
        //kurse pa parametra, vazhdojme direkt me metoden query
        //metodat fetch/fetchAll perdoren kur duam te kthejme/marrim ndonje vlere
        


        public function insertVape($vape){
            $conn = $this->connection;

            $emri = $vape->getEmri();
            $pershkrim = $vape->getPershkrimi();
            $cmimi = $vape->getCmimi();
            
            

            $sql = "INSERT INTO vape(Emri, Ngjyra, Cmimi) VALUES (?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $pershkrim, $cmimi]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllVape(){
            $conn = $this->connection;

            $sql = "SELECT * FROM vape";
            $statement = $conn->query($sql);

            $vape = $statement->fetchAll();
            return $vape;
        }


        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editvape($id, $emri, $pershkrim, $cmimi){
            $conn = $this->connection;
            $sql = "UPDATE vape SET Emri=?,Pershkrimi=?, Cmimi=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $pershkrim, $cmimi, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deletevape($id){
            $conn = $this->connection;

            $sql = "DELETE FROM vape WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getVapeById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM vape WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $vape=$statement->fetch();

            return $vape;
        }

    }

?>