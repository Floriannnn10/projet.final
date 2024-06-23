<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connexion à la base de données
    $dsn = 'mysql:host=localhost;dbname=utilisateur;charset=utf8';
    $username = 'root';
    $password = '';
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Recherche dans la table des clients
        $sql = "SELECT * FROM client WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $client = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($client && password_verify($mot_de_passe, $client['mot_de_passe'])) {
            $_SESSION['client_id'] = $client['id'];
            header('Location:index.php');
            exit;
        }

        // Recherche dans la table des administrateurs
        $sql = "SELECT * FROM admin WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && password_verify($mot_de_passe, $admin['mot_de_passe'])) {
            $_SESSION['admin'] = $admin['id'];
            header('Location: admin/dashboard_admin.php');
            exit;
        }

        // Si aucune correspondance trouvée
        $_SESSION['error'] = "Email ou mot de passe incorrect.";
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index1.css">
</head>

<body>
    <div class="background-video">
        <video autoplay muted loop id="background-video">
            <source src="video/Alienware m17 Laptop Product Video (2020).mp4" type="video/mp4">
            <!-- Ajoutez d'autres sources pour une meilleure compatibilité -->
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div>

    <!-- card pour les connexions , inscriptions ou vistes  -->

    <div id="bouttons">

        <div class="card">
            <a href="login.php" style="text-decoration:none ">
                <h5 class="card-title" style="color: white;">Connexion</h5>
            </a>
        </div>

        <div class="card">
            <a href="inscription.php" style="text-decoration:none ">
                <h5 class="card-title" style="color: white;">Inscription</h5>
            </a>
        </div>

        <div class="card">
            <a href="index2.php" style="text-decoration:none ">
                <h5 class="card-title" style="color: white;">Visiter Le Site</h5>
            </a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>