<h3 class="text-center">Derniers produits</h3>

<a href="index.php?page=addProduit"><button class="btn btn-primary">Ajouter un produit</button></a>
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
                <a href="index.php?page=updateProduct&id=<?= $produit->getId() ?>" class="btn btn-primary">Modifier</a>
                <a href="index.php?page=deleteProduct&id=<?= $produit->getid() ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
</div>