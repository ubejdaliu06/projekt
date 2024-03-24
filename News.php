<?php
class News
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "vape";
    public $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);

        // Check for connection errors
        if ($this->mysqli->connect_error) {
            die('Connect Error (' . $this->mysqli->connect_errno . ') ' . $this->mysqli->connect_error);
        }
    }

    public function news($data)
    {
        $email = $data['email'];

        $stmt = $this->mysqli->prepare("INSERT INTO news (email) VALUES (?)");
        $stmt->bind_param("s", $email); 
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    public function getAllNews()
    {
        $conn = $this->mysqli;

        $sql = "SELECT * FROM news";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $news = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); // Corrected variable name here
        $stmt->close();

        return $news; // Corrected return statement here
    }
}
?>
