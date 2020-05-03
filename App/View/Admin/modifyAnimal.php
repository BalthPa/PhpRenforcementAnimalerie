<div class="container mt-5">
    <form action="index.php?page=updateAnimal&id=<?= $animal->getId() ?>" method="POST">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $animal->getName() ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="<?= $animal->getType() ?>">
        </div>
        <div class="form-group">
            <label for="race">Race</label>
            <input type="text" class="form-control" id="race" name="race" value="<?= $animal->getRace() ?>">
        </div>
        <div class="form-group">
            <label for="taille">Taille</label>
            <input type="number" class="form-control" id="taille" name="taille" value="<?= $animal->getTaille() ?>">
        </div>
        <div class="form-group">
            <label for="poids">Poids</label>
            <input type="number" class="form-control" id="poids" name="poids" value="<?= $animal->getPoids() ?>">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="age" class="form-control" id="age" name="age" value="<?= $animal->getAge() ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>