<div class="recherche mt-5"></div>

<h2 class="text-center">Listes des animaux</h2>

<a href="index.php?page=addAnimal"><button class="btn btn-primary">Ajouter un animal</button></a>

<div class="affichage d-flex flex-wrap">
    <?php foreach ($animaux as $animal) : ?>
        <div class="card col-sm-4">
            <?php
            if ($animal->getRace() == 'Chien'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2y65nce" alt="Photo de chien">';
            }
            else if ($animal->getRace() == 'Chat'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2Yru7Gi" alt="Photo de chat">';
            }
            else if ($animal->getRace() == 'Poisson'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2z9rrCA" alt="Photo de poisson">';
            }
            else if ($animal->getRace() == 'Lapin'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/3aY33Bn" alt="Photo de lapin">';
            }
            else if ($animal->getRace() == 'Souris'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2YsNkaM" alt="Photo de souris">';
            }
            else{
                echo '<p class="text-center">Image indisponible</p>' ;
            }
            ?>

            <div class="card-body">
                <h5 class="card-title"><?= $animal->getNom() ?></h5>
                <div class="card-text">
                    <p>Type: <?= $animal->getType() ?></p>
                    <p>Race: <?= $animal->getRace() ?></p>
                    <p>Poids: <?= $animal->getPoids() ?> kgs</p>
                    <p>Taille: <?= $animal->gettaille() ?> cms</p>
                    <p>Age: <?= $animal->getAge() ?> ans</p>
                </div>
                <a href="index.php?page=updateAnimal&id=<?= $animal->getId() ?>" class="btn btn-primary">Modifier</a>
                <a href="index.php?page=deleteAnimal&id=<?= $animal->getid() ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php endforeach ?>
</div>