<?php
include "../db/conexionDB.php";


$sql = "INSERT INTO `item_compra` (`item`, `stock`) VALUES
('$_POST[item]', '$_POST[stock]')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
    die();
    //creacionLista($username); //create session
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

//   function create_session($user){
//     //here we will create the sessions
//     $_SESSION["username"] = $user;
//     header("Location: ../profile.php");
//     die();
//   }


?>