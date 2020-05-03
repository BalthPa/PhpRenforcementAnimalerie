<div class="container mt-5">
    <form action="index.php?page=addProduit" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="nom">
        </div>
        <div class="form-group">
            <label for="typeAnimal">Type</label>
            <input type="text" class="form-control" id="typeAnimal" name="type" >
        </div>
        <div class="form-group">
            <label for="raceAnimal">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" >
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock">
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
