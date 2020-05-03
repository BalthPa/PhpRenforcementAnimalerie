<div class="container mt-5">
    <form action="index.php?page=signup" method="POST">
        <p class=text-danger>Créer un compte</p>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse">
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville">
        </div>
        <div class="form-group">
            <label for="cp">Code Postal</label>
            <input type="number" class="form-control" id="cp" name="cp">
        </div>
        <div class="form-group">
            <label for="mail">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="number" class="form-control" id=telephone" name="tel">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id=password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>