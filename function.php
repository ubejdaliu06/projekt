<?php
  class Contact
  {
      private $host = "localhost";
      private $user = "root";
      private $pass = "";
      private $db = "store";
      public $mysqli;

      public function __construct()
      {
          $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
      }

      public function contact_us($data)
      {
          $emri = $data['emri'];
          $mbiemri = $data['mbiemri'];
          $email = $data['email'];
          $nrtelefonit = $data['nrtelefonit'];
          $comment = $data['comment'];

          // Using prepared statement to prevent SQL injection
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
