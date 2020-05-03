    <div class="recherche mt-5"></div>
    <div class="affichage mt-5 justify-content-around">

        <div class="jumbotron col-sm-8 m-auto" >
            <h3 class="card-title"><?= $animal->getName() ?></h3>
                <p>Type: <?= $animal->getType() ?></p>
                <p>Race: <?= $animal->getRace() ?></p>
                <p>Poids: <?= $animal->getPoids() ?> kgs</p>
                <p>Taille: <?= $animal->getPoids() ?> cms</p>
                <p>Age: <?= $animal->getAge() ?> ans</p>

                <a><button class="btn btn-dark">Réserver l'animal</button></a>

            </div>
        </div>
    </div>