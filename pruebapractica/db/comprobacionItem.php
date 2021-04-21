<?php
include "../db/conexionDB.php";


if(!empty($_POST["item"])) { //if POST is not void
  $item = $_POST["item"];
  
  $sql = "SELECT * FROM item_compra WHERE item='$item'"; //query

  //run the query
  $result = $conn->query($sql);


  if ($result->num_rows == 0) { //if no results user is available
     echo "available";
  }else{ //else, user is not available
    echo "not available";
  }
}

//close connection
$conn->close();
?>
