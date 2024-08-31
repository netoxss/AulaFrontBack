<?php
 $conn = new mysqli("localhost", "root", "", "bd_front_back");

  if ($conn -> connect_error){
    die('Falha na conexão: ' . $conn->connect_erro);
  }
?>