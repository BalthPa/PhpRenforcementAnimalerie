<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">

    <div class="jumbotron col-sm-8 m-auto" >

        <h3 class="card-title"><?= $produit->getNom() ?></h3>

        <p>Type : <?= $produit->getType() ?></p>
        <p>Prix : <?= $produit->getPrix() ?> €</p>
        <p>Stock: <?= $produit->getStock() ?></p>

        <a><button class="btn btn-dark">Ajouter au panier</button></a>

    </div>
</div>
</div>