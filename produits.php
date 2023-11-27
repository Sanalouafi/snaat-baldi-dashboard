<?php

include "connexion.php";
$query = "SELECT * from produit ";
$result = mysqli_query($conn, $query);






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sanaat bladi dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
    <style>
        .cube {
            height: 10vh !important;

        }
    </style>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <div class="sidebar pe-4 pb-3">
            <nav style="background: #28323A;" class="navbar bg-light navbar-light">
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">User-name</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link" id="dashboard-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="categories.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Categories</a>
                    <a href="materiels.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Materiels</a>
                    <a href="artisants.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Artisant</a>
                    <a href="produits.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>produits</a>


                </div>
            </nav>
        </div>


        <div class="content">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-home"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">User-name send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">User-name send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">User-name send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">User-name</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>



            <div class="container-fluid pt-4 px-4" id="content">
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-dark text-center rounded p-4">

                                <a href="add_prod.php" class="btn btn-success mb-3">Add New</a>




                                <table class="table table-hover text-center">
                                    <thead class="table-dark">
                                        <tr data-aos="fade-left" data-aos-duration="1500">
                                            <th scope="col-6" data-aos="fade-left"> nom</th>
                                            <th scope="col-6" data-aos="fade-left"> descreption</th>
                                            <th scope="col-6" data-aos="fade-left"> prix</th>
                                            <th scope="col-6" data-aos="fade-left"> artisant</th>
                                            <th scope="col-6" data-aos="fade-left"> materiel</th>
                                            <th scope="col-6" data-aos="fade-left"> categorie</th>
                                            <th scope="col-6" data-aos="fade-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody data-aos="fade-right" data-aos-duration="1500">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $query_cate = "SELECT c.nom FROM categorie AS c 
                                                       JOIN categorie_produit AS cp ON c.id = cp.categorie_id 
                                                       JOIN produit AS p ON cp.produit_id = p.id 
                                                       WHERE p.id = " . $row['id'];

                                            $result_cate = mysqli_query($conn, $query_cate);
                                            $row_cate = mysqli_fetch_assoc($result_cate);

                                            $query_artis = "SELECT a.nom ,a.prenom FROM artisant AS a  
                                                        JOIN produit AS p ON p.artisant_id = a.id 
                                                        WHERE a.id = " . $row['artisant_id'];
                                            $result_artis = mysqli_query($conn, $query_artis);
                                            $row_artis = mysqli_fetch_assoc($result_artis);

                                            $query_mate = "SELECT m.nom FROM materiel AS m
                                                        JOIN produit AS p ON m.id = p.materiel_id 
                                                        WHERE m.id = " . $row['materiel_id'];

                                            $result_mate = mysqli_query($conn, $query_mate);
                                            $row_mate = mysqli_fetch_assoc($result_mate);


                                        ?>
                                            <tr>
                                                <td><?= $row['nom']; ?></td>
                                                <td><?= $row['descreption']; ?></td>
                                                <td><?= $row['prix']; ?></td>
                                                <td><?= $row_artis['nom'] . " " . $row_artis['prenom']; ?></td>
                                                <td><?= $row_mate['nom']; ?></td>
                                                <td><?= $row_cate['nom']; ?></td>

                                                <td>
                                                    <a href="edit_prod.php?id=<?= $row['id'] ?>" class="link-dark">
                                                        <i class='bx bxs-pencil fs-5 me-3'></i>
                                                    </a>
                                                    <a href="delete_prod.php?id=<?= $row['id'] ?>" class="link-danger">
                                                        <i class='bx bxs-user-x fs-5'></i>
                                                    </a>
                                                </td>

                                            </tr>
                                        <?php }; ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Content End -->


    <!-- JavaScript Libraries -->
    <script src="js/dashboard.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/chart.min.js"></script>
    <script>
        // Sidebar Toggler
        document
            .querySelector(".sidebar-toggler")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").classList.toggle("open");
                document.querySelector(".content").classList.toggle("open");
                return false;
            });
        var currentPage = window.location.href;

        var navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        navLinks.forEach(function(link) {
            if (link.href === currentPage) {
                link.classList.add("active");
            }
        });
    </script>
</body>
<script>
    AOS.init();
</script>

</html>