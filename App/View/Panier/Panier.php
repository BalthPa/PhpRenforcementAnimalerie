<h2 class="text-center">Panier</h2>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Produit</th>
        <th scope="col">Quantite</th>
        <th scope="col">Prix</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($produits as $produit) :?>
        <tr>
            <td><?= $produit->getProduitNom() ?></td>
            <td><?= $produit->getQuantite() ?></td>
            <td><?= $produit->getMontant() * $produit->getQuantite() ?> €</td>
        </tr>

    <?php endforeach ?>
    </tbody>
</table>

<h2>Montant total : <?= $montantTotal ?> €</h2>

<form method="post" action="index.php?page=paiement">
    <input type="hidden" name="date" value="<?= $date ?>">
    <input type="hidden" name="montant" value="<?= $montantTotal ?>">
    <input type="hidden" name="etat" value="paye">

    <button class="btn btn-primary" type="submit">Payer</button>
</form>
