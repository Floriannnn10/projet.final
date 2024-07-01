<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

$admin = $_SESSION['admin'];

$message = '';

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=produits;charset=utf8';
$username = 'root';
$password = '';
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $modele_app = $_POST['modele_app'];
        $ram = $_POST['ram'];
        $giga = $_POST['giga'];
        $details_app = $_POST['details_app'];
        $prix = $_POST['prix'];

        $uploadDir = 'uploads/';

        // Prépare et exécute l'insertion dans la table ordinateurs
        $sql = "INSERT INTO appareil (modele_app, ram, giga, details_app, prix) 
                VALUES (:modele_app, :ram, :giga, :details_app, :prix)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'modele_app' => $modele_app,
            'ram' => $ram,
            'giga' => $giga,
            'details_app' => $details_app,
            'prix' => $prix,
        ]);

        // Récupère l'ID de l'ordinateur inséré
        $id_appareil = $pdo->lastInsertId();

        // Gère le téléchargement des images
        foreach ($_FILES['img']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['img']['name'][$key]);
            $filePath = $uploadDir . $file_name;

            if (move_uploaded_file($tmp_name, $filePath)) {
                $sql = "INSERT INTO img (id_appareil, chemin_image) VALUES (:id_appareil, :chemin_image)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'id_appareil' => $id_appareil,
                    'chemin_image' => $filePath
                ]);
            } else {
                $message = "Erreur lors de l'upload de l'image " . $file_name;
            }
        }

        $_SESSION['message'] = 'Le produit a été ajouté avec succès.';
        header('Location: accessoire.php');
        exit;
    }
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dashboard.css">
    <title>AdminHub</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">InnovAdmin</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="ordinateur.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Ordinateur</span>
                </a>
            </li>
            <li>
                <a href="accessoire.php">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Accessoires</span>
                </a>
            </li>
            <li>
                <a href="telephone.php">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Téléphone</span>
                </a>
            </li>
            <li>
                <a href="admin.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">Administrateur</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Paramètres</span>
                </a>
            </li>
            <li>
                <a href="login.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Déconnexion</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Catégories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>

            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Accessoires</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php if (!empty($_SESSION['message'])) : ?>
                <div>
                    <p class="alert alert-success" role="alert">
                        <?php echo $_SESSION['message'];
                        unset($_SESSION['message']); ?>
                    </p>
                </div>
            <?php endif; ?>
            <br><br>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="modele_app">Modèle:</label><br>
                <input type="text" id="modele_app" name="modele_app" required><br>
                <label for="ram">Ram:</label><br>
                <input type="text" id="ram" name="ram" required><br>
                <label for="giga">Giga:</label><br>
                <input type="text" id="giga" name="giga" required><br>
                <label for="prix">Prix</label><br>
                <input type="text" id="prix" name="prix" required><br>
                <label for="details_app">Commentaires:</label><br>
                <textarea name="details_app" id="details_app" required></textarea><br>
                <label for="img">Image:</label><br>
                <input type="file" id="img" name="img[]" multiple required><br><br>
                <button type="submit" name="add">Ajouter</button>
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script>
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item => {
            const li = item.parentElement;

            item.addEventListener('click', function() {
                allSideMenu.forEach(i => {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });

        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function() {
            sidebar.classList.toggle('hide');
        })
    </script>

</body>

</html>