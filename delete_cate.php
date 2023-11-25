<?php
include "connexion.php";


    $id = $_GET['id'];

    $query = "DELETE FROM `categorie` WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: categories.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
