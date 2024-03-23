<?php
  class Contact
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
      
      public function contact_us($data)
      {
          $emri = $data['emri'];
          $mbiemri = $data['mbiemri'];
          $email = $data['email'];
          $nrtelefonit = $data['nrtelefonit'];
          $comment = $data['comment'];

          $stmt = $this->mysqli->prepare("INSERT INTO contact_us (emri, mbiemri, email, nrtelefonit, comment) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $emri, $mbiemri, $email, $nrtelefonit, $comment);
          $result = $stmt->execute();
          $stmt->close();

          return $result;
      }
          
      
      public function getAllComments()
      {
          $conn = $this->mysqli;

          $sql = "SELECT * FROM contact_us";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          $comments = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
          $stmt->close();

          return $comments;
      }
  }
?>
