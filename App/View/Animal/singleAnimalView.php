    <div class="recherche mt-5"></div>
    <div class="affichage mt-5 justify-content-around">

        <div class="jumbotron col-sm-8 m-auto" >
            <h3 class="card-title"><?= $animal->getNom() ?></h3>
                <p>Type: <?= $animal->getType() ?></p>
                <p>Race: <?= $animal->getRace() ?></p>
                <p>Poids: <?= $animal->getPoids() ?> grs</p>
                <p>Taille: <?= $animal->getTaille() ?> cms</p>
                <p>Age: <?= $animal->getAge() ?> ans</p>

                <H3>Choississez une date de rendez vous</H3>
                <form action="index.php?page=reservation" method="post">
                    <label>Entrez votre nom</label>
                    <input type="text" name="nom">
                    <input type="hidden" value="<?= $animal->getId() ?>" name="animal_id">
                    <input type="hidden" value="<?= $date ?>" name="date">
                    <label>Choisissez une date</label>
                    <input type="date" name="dateRdv">
                    <button type="submit">Réserver l'animal</button>
                </form>

            </div>
        </div>
    </div>