<div class="recherche mt-5"></div>

<h2 class="text-center">Listes des animaux</h2>

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
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://lemagdesanimaux.ouest-france.fr/images/dossiers/2020-04/voile-de-chine-113105.jpg" alt="Photo de poisson">';
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
                <a href="index.php?page=singleAnimal&id=<?= $animal->getId() ?>" class="btn btn-primary">Voir l'animal</a>
            </div>
        </div>
    <?php endforeach ?>
</div>