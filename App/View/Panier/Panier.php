<h2 class="text-center">Panier</h2>

<table>
    <thead>
    </thead>
    <tbody>
    <?php foreach($paniers as $panier) :?>
    <tr>
        <td><?= $panier->getProduit()->getNom() ?></td>
        <td><?= $panier-getMontant() ?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>