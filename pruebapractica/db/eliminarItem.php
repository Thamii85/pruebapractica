<?php
    include "conexionDB.php";
    $id = $_GET["id"];

    $sql = "DELETE FROM item_compra WHERE id = $id";


    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        die();
    } else{
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>