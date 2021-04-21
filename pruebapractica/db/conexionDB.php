<?php
  //data connection
  $server = "localhost";
  $user = "pruebapractica";
  $password = "pruebapractica"; //please, change this in a real implementation
  $database = "pruebapractica";

  // Create connection
  $conn = new mysqli($server, $user, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>