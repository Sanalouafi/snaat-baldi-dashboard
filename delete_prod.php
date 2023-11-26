<?php
include "connexion.php";


    $id = $_GET['id'];

    $query = "DELETE FROM `produit` WHERE id = $id";

    $result = mysqli_query($conn, $query);
    
    $query1 = "DELETE FROM `categorie_produit` WHERE produit_id = $id";
    
    $result1 = mysqli_query($conn, $query1);

    if ($result && $result1) {
        header("Location: produits.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
