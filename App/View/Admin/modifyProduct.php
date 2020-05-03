<div class="container mt-5">
    <form action="index.php?page=updateProduct&id=<?= $produit->getId() ?>" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= $produit->getNom() ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="<?= $produit->getType() ?>">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="<?= $produit->getPrix() ?>">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?= $produit->getStock() ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>