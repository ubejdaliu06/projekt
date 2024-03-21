
<?php
    include_once('databaseConn.php');

    class VapeRepository{
        private $connection;

        public function __construct()
        {
            $conn= new DatabaseConn;
            $this->connection = $conn->startConnection();
        }

        //kur kemi parametra kryesisht e pergatisim sql per marrjen e parametrave me prepare
        //dhe e bejme lidhjen e parametrave permes metodes execute
        //Pikepyetjet neper queries (?) zevendesohen nga parametrat te metoda execute
        //kurse pa parametra, vazhdojme direkt me metoden query
        //metodat fetch/fetchAll perdoren kur duam te kthejme/marrim ndonje vlere
        


        public function insertVape($vape){
            $conn = $this->connection;
           
            $Emri = $vape->getEmri();
            $Pershkrim = $vape->getPershkrimi();
            $Cmimi = $vape->getCmimi();
            $img = $vape->getImg();
            
            

            $sql = "INSERT INTO vape(Emri, Pershkrim, Cmimi, img) VALUES (?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$Emri, $Pershkrim, $Cmimi,$img]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllVape(){
            $conn = $this->connection;
                
            $sql = "SELECT * FROM vape";
            $statement = $conn->query($sql);

            

            $vepat = $statement->fetchAll();
            return $vepat;
        }


        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme paisjen (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editVape($id, $Emri, $Pershkrim, $Cmimi,$img){
            $conn = $this->connection;
            
            $sql = "UPDATE vape SET Emri=?,Pershkrimi=?, Cmimi=? ,img=? WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$Emri, $Pershkrim, $Cmimi,$img ,$id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deleteVape($id){
            $conn = $this->connection;
            
            $sql = "DELETE FROM vape WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getVapeById($id){
            $conn = $this->connection;
            
            $sql = "SELECT * FROM vape WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $vape=$statement->fetch();

            return $vape;
        }

    }

?>