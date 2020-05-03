<div class="container mt-5">
    <form action="index.php?page=addAnimal" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="typeAnimal">Type</label>
            <input type="text" class="form-control" id="typeAnimal" name="type" >
        </div>
        <div class="form-group">
            <label for="raceAnimal">Race</label>
            <input type="text" class="form-control" id="raceAnimal" name="race" >
        </div>
        <div class="form-group">
            <label for="taille">Taille</label>
            <input type="number" class="form-control" id="taille" name="taille">
        </div>
        <div class="form-group">
            <label for="poids">Poids</label>
            <input type="number" class="form-control" id="poids" name="poids">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
