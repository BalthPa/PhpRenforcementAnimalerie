<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">

    <div class="jumbotron col-sm-8 m-auto" >

        <h3 class="card-title"><?= $produit->getNom() ?></h3>

        <p>Type : <?= $produit->getType() ?></p>
        <p>Prix : <?= $produit->getPrix() ?> €</p>
        <p>Stock: <?= $produit->getStock() ?></p>

        <form method="post" action="index.php?page=addPanier">
            <label for="quantite">Quantité</label>
            <input type="number" id="quantite" name="quantite">
            <input type="hidden" name="montant" value="<?= $produit->getPrix() ?>">
            <input type="hidden" name="produit_id" value="<?= $produit->getId() ?>">
        <a><button type="submit" class="btn btn-dark">Ajouter au panier</button></a>

        </form>

    </div>
</div>
</div>