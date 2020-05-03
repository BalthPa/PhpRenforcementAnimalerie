<h2 class="text-center">Commandes</h2>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Numéro de la commande</th>
        <th scope="col">Date</th>
        <th scope="col">Montant</th>
        <th scope="col">Etat</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($commandes as $commande) :?>
        <tr>
            <td><?= $commande->getId() ?></td>
            <td><?= $commande->getDate() ?></td>
            <td><?= $commande->getMontant()?> €</td>
            <td><?= $commande->getEtat()?> </td>
        </tr>

    <?php endforeach ?>
    </tbody>
</table>