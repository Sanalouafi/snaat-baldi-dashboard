<?php
include "connexion.php";
$id = $_GET['id'];

$query = "SELECT * FROM `produit` WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$query_categorie = "SELECT * FROM categorie";
$result_categorie = mysqli_query($conn, $query_categorie);

$query_artisant = "SELECT * FROM artisant";
$result_artisant = mysqli_query($conn, $query_artisant);

$query_materiel = "SELECT * FROM materiel";
$result_materiel = mysqli_query($conn, $query_materiel);

$query_cate = "SELECT c.id, c.nom FROM categorie AS c 
              JOIN categorie_produit AS cp ON c.id = cp.categorie_id 
              JOIN produit AS p ON cp.produit_id = p.id 
             WHERE p.id = $id";

$result_cate = mysqli_query($conn, $query_cate);
$row_cate = mysqli_fetch_assoc($result_cate);

$query_artis = "SELECT a.id, a.nom, a.prenom FROM artisant AS a  
                JOIN produit AS p ON p.artisant_id = a.id 
               WHERE a.id = " . $row['artisant_id'];
$result_artis = mysqli_query($conn, $query_artis);
$row_artis = mysqli_fetch_assoc($result_artis);

$query_mate = "SELECT m.id, m.nom FROM materiel AS m
               JOIN produit AS p ON m.id = p.materiel_id 
              WHERE m.id = " . $row['materiel_id'];

$result_mate = mysqli_query($conn, $query_mate);
$row_mate = mysqli_fetch_assoc($result_mate);

if (isset($_POST['submit'])) {

    $nom = $_POST['nom_prod'];
    $descreption = $_POST['descreption'];
    $prix = $_POST['prix'];
    $artisant = $_POST['artisant'];
    $categorie = $_POST['categorie'];
    $materiel = $_POST['materiel'];

    $photo = $_FILES['photo']['name'];
    $temp_name = $_FILES['photo']['tmp_name'];

    if (!empty($photo)) {
        $folder = "img/" . $photo;
        if (move_uploaded_file($temp_name, $folder)) {
            echo "File moved successfully.";
        } else {
            echo "Error moving file.";
        }
    }

    $query = "UPDATE produit SET nom='$nom', descreption='$descreption', prix='$prix', artisant_id='$artisant', materiel_id='$materiel'";

    if (!empty($photo)) {
        $query .= ", photo='$folder'";
    }

    $query .= " WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if (isset($result)) {
        header("location:produits.php");
    } else {
        echo ("error");
    }
}
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

<body class="bg-dark text-light">

    <style>
        .cube {
            height: 10vh !important;

        }

        .card {
            width: 100%;
            border: none;
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card img {
            width: 200px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card label {
            margin-top: 30px;
            text-align: center;
            height: 40px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 20px;
            color: white;
        }

        .form-input-label,
        .form-label {
            color: white;

        }

        .card input {
            display: none;
        }
    </style>
    <div class="container-xxxl position-relative bg-white d-flex p-0">
        <div class="sidebar pe-4 pb-3">
            <nav style="background: #28323A;" class="navbar bg-light navbar-light">
                <a href="dashboard.html" class="navbar-brand mx-4 mb-3">
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
                    <a href="produits.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>produits</a>


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
                                <div class="container mt-5">


                                    <div class="container d-flex justify-content-center" style="margin-top:10%;">
                                        <form method="post" style="width:50vw; min-width:300px;">
                                            <div class="card">
                                                <img src="<?php echo $row['photo']; ?>" alt="image" id="image">
                                                <label for="input-file">Choose Image</label>


                                                <input type="file" accept="image/jpg, image/png, image/jpeg" id="input-file" name="photo">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label">nom de produit:</label>
                                                    <input type="text" class="form-control" name="nom_prod" placeholder="nom de produit" value="<?php echo $row['nom']; ?>" required>
                                                </div>

                                                <div class="col">
                                                    <label class="form-label">Descreption:</label>
                                                    <input type="text" class="form-control" name="descreption" placeholder="description" value="<?php echo $row['descreption']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Prix:</label>
                                                <input type="number" class="form-control" name="prix" placeholder="prix en MAD" value="<?php echo $row['prix']; ?>" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">artisants:</label>

                                                <select name="artisant" class="form-control">
                                                    <option value="<?php $row_artis['id'] ?>"><?= $row_artis['nom'] . " " . $row_artis['prenom']; ?></option>

                                                    <?php
                                                    while ($row_artisant = mysqli_fetch_assoc($result_artisant)) {
                                                        echo '<option value="' . $row_artisant['id'] . '">' . $row_artisant['nom'] . ' ' . $row_artisant['prenom'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label class="form-label">categorie:</label>

                                                    <select name="categorie" class="form-control">
                                                        <option value="<?php $row_cate['id'] ?>"><?= $row_cate['nom']; ?></option>

                                                        <?php
                                                        while ($row_categorie = mysqli_fetch_assoc($result_categorie)) {
                                                            echo '<option value="' . $row_categorie['id'] . '">' . $row_categorie['nom'] .  '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <label class="form-label">materiel:</label>

                                                    <select name="materiel" class="form-control">
                                                        <option value="<?php $row_mate['id'] ?>"><?= $row_mate['nom']; ?></option>
                                                        <?php
                                                        while ($row_mate = mysqli_fetch_assoc($result_materiel)) {
                                                            echo '<option value="' . $row_mate['id'] . '">' . $row_mate['nom'] .  '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row ms-1 mt-4 justify-content-end">
                                                <button type="submit" class="btn btn-success col-3 me-3" name="submit">Update</button>
                                                <a href="produits.php" class="btn btn-danger col-3">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
            let image = document.getElementById("image");
            let input = document.getElementById("input-file");

            input.onchange = () => {
                image.src = URL.createObjectURL(input.files[0]);
            }
        </script>
</body>

</html>