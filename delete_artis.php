<?php
include "connexion.php";


    $id = $_GET['id'];

    $query = "DELETE FROM `artisant` WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: artisants.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
