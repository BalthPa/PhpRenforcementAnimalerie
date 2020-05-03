<h2 class="text-center" style="margin-top: 50px">Panier</h2>

<table class="table" style="margin-top: 25px">
    <thead>
    <tr >
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

<h2 style="padding-left: 42%; padding-top: 80px">Montant total : <?= $montantTotal ?> €</h2>

<form method="post" action="index.php?page=paiement">
    <input type="hidden" name="date" value="<?= $date ?>">
    <input type="hidden" name="montant" value="<?= $montantTotal ?>">
    <input type="hidden" name="etat" value="paye">

    <button class="btn btn-success" type="submit" style="margin-left: 47%; margin-top: 50px; padding:10px 30px 10px 30px ">Payer</button>
</form>
