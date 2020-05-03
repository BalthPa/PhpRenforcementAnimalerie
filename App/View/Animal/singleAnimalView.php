    <div class="recherche mt-5"></div>
    <div class="affichage mt-5 justify-content-around">

        <div class="jumbotron col-sm-8 m-auto" >
            <h3 class="card-title"><?= $animal->getNom() ?></h3>
                <p>Type: <?= $animal->getType() ?></p>
                <p>Race: <?= $animal->getRace() ?></p>
                <p>Poids: <?= $animal->getPoids() ?> kgs</p>
                <p>Taille: <?= $animal->getPoids() ?> cms</p>
                <p>Age: <?= $animal->getAge() ?> ans</p>

                <H3>Réserver l'animal</H3>
                <form action="index.php?page=reservation">
                    <label>Entrez votre nom</label>
                    <input type="text" name="nom">
                </form>

            </div>
        </div>
    </div>