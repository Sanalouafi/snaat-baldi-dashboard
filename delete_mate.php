<?php
include "connexion.php";


    $id = $_GET['id'];

    $query = "DELETE FROM `materiel` WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: materiels.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
