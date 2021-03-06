<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=allAnimals">Liste des animaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=allProducts">Liste des produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=panier">Panier</a>
                    </li>
                    <?php if (!isset($_SESSION["user"])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=signup">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=login">Connexion</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=logout">Déconnexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin">Page Admin</a>
                        </li>
                    <?php endif ?>
                </ul>

            </div>
        </nav>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer>

    </footer>

</body>
</html>