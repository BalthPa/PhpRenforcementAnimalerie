<h2 class="text-center">Reservation/Rendez-Vous</h2>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Animal</th>
        <th scope="col">Date Commande</th>
        <th scope="col">Date RDV</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($reservations as $reservation) :?>
        <tr>
            <td><?= $reservation->getNom() ?></td>
            <td><?= $reservation->getAnimalId()?></td>
            <td><?= $reservation->getDate()?> </td>
            <td><?= $reservation->getDateRdv()?> </td>
        </tr>

    <?php endforeach ?>
    </tbody>
</table>