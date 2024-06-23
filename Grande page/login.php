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
            header('Location:index2.php');
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
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 700px;
            position: relative;
            z-index: 1;
        }

        .login-form {
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            background: #ffff;
            /* Arrière-plan blanc légèrement transparent */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: black;
        }

        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        #background-video {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="background-video">
        <video autoplay muted loop id="background-video">
            <source src="video/Alienware m17 Laptop Product Video (2020).mp4" type="video/mp4">
            <!-- Ajoutez d'autres sources pour une meilleure compatibilité -->
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div>

    <div class="container">
        <div class="login-form">
            <h1>Connexion</h1>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>
            <form action="index2.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mot_de_passe" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
           
            <p class="text-center" style="margin-top:25px;">Vous n'avez pas de compte ? <br> Inscrivez-vous pour ne rien rater</p>
            <a href="inscription.php" class="btn btn-outline-primary mt-3">S'inscrire</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>