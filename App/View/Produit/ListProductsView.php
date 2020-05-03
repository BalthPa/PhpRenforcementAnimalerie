<div class="recherche mt-5"></div>

<h3 class="text-center">Derniers produits</h3>
<div class="affichage mt-5 d-flex justify-content-around flex-wrap">

    <?php foreach ($products as $product) : ?>
        <div class="card col-sm-3 text-white bg-dark mb-3 " style="padding-top: 30px">
            <?php
            if ($product->getType() == 'Chien'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/35hHNp3" alt="Card image cap">';
            }
            else if ($product->getType() == 'Chat'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/35ur6qB" alt="Card image cap 2">';
            }
            else {
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/3aXs8wp" alt="Card image cap 2">';
            }
            ?>
            <div class="card-body">
                <h5 class="card-title"><?= $product->getNom() ?></h5>
                <div class="card-text">
                    <p>Type: <?= $product->getType() ?></p>
                    <p>Prix: <?= $product->getPrix() ?> €</p>
                    <p>Stock: <?= $product->getStock() ?> </p>

                </div>
                <a href="index.php?page=singleProduct&id=<?= $product->getId() ?>" class="btn btn-primary">Voir l'article</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
</div>