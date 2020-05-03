<div class="presentation text-center p-3">
    <h1>SPA</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis ea eos expedita, explicabo fuga, hic laboriosam officiis quae quam quibusdam sed sit soluta tenetur vel, velit voluptate. Odit, sit.</p>
</div>
<div class="recherche mt-5"></div>

<h3 class="text-center">Derniers animaux</h3>
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
                <a href="index.php?page=singleAnimal&id=<?= $animal->getId() ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
<div>
    <h3 class="text-center">Derniers produits</h3>
    <div class="affichage mt-5 d-flex justify-content-around flex-wrap">

        <?php foreach ($produits as $produit) : ?>
            <div class="card col-sm-4">
                <?php
                if ($produit->getType() == 'Chien'){
                    echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/35hHNp3" alt="Card image cap">';
                }
                else if ($produit->getType() == 'Chat'){
                    echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/35ur6qB" alt="Card image cap 2">';
                }
                else {
                    echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/3aXs8wp" alt="Card image cap 2">';
                }
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $produit->getNom() ?></h5>
                    <div class="card-text">
                        <p>Type: <?= $produit->getType() ?></p>
                        <p>Prix: <?= $produit->getPrix() ?> €</p>
                        <p>Stock: <?= $produit->getStock() ?> </p>

                    </div>
                    <a href="index.php?page=singleProduct&id=<?= $produit->getId() ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="don" style="padding-top: 80px;  padding-bottom: 80px">
    <div class="container">
        <h2 class="text-center"> Formulaire de don</h2>
        <form>
            <p class="text-center" > Cet argent nous servira pour prendre soin des animaux en attendant que des
                personnes bienveillantes viennent adopter un animal.</p>
            <div class="form-group">
                <label for="exampleInputPassword1">De combien d'euros voulez-vous faire un don ?</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Ex: 20€">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>