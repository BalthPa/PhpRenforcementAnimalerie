<div class="presentation text-center p-3">
    <h1>SPA</h1>
    <p>Nous sommes une association d'aide aux animaux abandonnées</p>
</div>
<div class="recherche mt-5"></div>

<h3 class="text-center">Carousel</h3>

<div class="slideshow-container">

  <?php foreach ($animaux as $animal) : ?>
  <div class="mySlides">
    <?php
            if ($animal->getRace() == 'Chien'){
                echo '<img class="card-img-top" style="width: 100%; margin:auto" src="https://bit.ly/2y65nce" alt="Photo de chien">';
            }
            else if ($animal->getRace() == 'Chat'){
                echo '<img class="card-img-top" style="width: 100%; margin:auto" src="https://bit.ly/2Yru7Gi" alt="Photo de chat">';
            }
            else if ($animal->getRace() == 'Poisson'){
                echo '<img class="card-img-top" style="width: 100%; margin:auto" src="https://bit.ly/2z9rrCA" alt="Photo de poisson">';
            }
            else if ($animal->getRace() == 'Lapin'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/3aY33Bn" alt="Photo de lapin">';
            }
            else if ($animal->getRace() == 'Souris'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2YsNkaM" alt="Photo de souris">';
            }
            else{
                echo '<p class="text-center">Image indisponible</p>' ;
            }
    ?>
    <div class="text"><?= $animal->getNom() ?> le <?= $animal->getRace() ?></div>
  </div>
  <?php endforeach ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<h3 class="text-center">Derniers animaux</h3>
<div class="affichage mt-5 d-flex justify-content-around flex-wrap">
    <?php foreach ($animaux as $animal) : ?>
        <div class="card col-sm-3 text-white bg-dark mb-3" style="padding-top: 30px">
            <?php
            if ($animal->getRace() == 'Chien'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2y65nce" alt="Photo de chien">';
            }
            else if ($animal->getRace() == 'Chat'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2Yru7Gi" alt="Photo de chat">';
            }
            else if ($animal->getRace() == 'Poisson'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://lemagdesanimaux.ouest-france.fr/images/dossiers/2020-04/voile-de-chine-113105.jpg" alt="Photo de poisson">';
            }
            else if ($animal->getRace() == 'Lapin'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/3aY33Bn" alt="Photo de lapin">';
            }
            else if ($animal->getRace() == 'Souris'){
                echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2YsNkaM" alt="Photo de souris">';
            }
            else{
                echo '<p class="text-center">Image indisponible</p>' ;
            }
            ?>

            <div class="card-body">
                <h5 class="card-title"><?= $animal->getNom() ?></h5>
                <div class="card-text">
                    <p>Type: <?= $animal->getType() ?></p>
                    <p>Race: <?= $animal->getRace() ?></p>
                    <p>Poids: <?= $animal->getPoids() ?> grs</p>
                    <p>Taille: <?= $animal->gettaille() ?> cms</p>
                    <p>Age: <?= $animal->getAge() ?> ans</p>
                </div>
                <a href="index.php?page=singleAnimal&id=<?= $animal->getId() ?>" class="btn btn-primary">Voir l'Animal</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
<div>
    <h3 class="text-center" style="padding-top: 80px">Derniers produits</h3>
    <div class="affichage mt-5 d-flex justify-content-around flex-wrap">

        <?php foreach ($produits as $produit) : ?>
            <div class="card col-sm-3 text-white bg-dark mb-3 " style="padding-top: 30px">
                <?php
                if ($produit->getType() == 'Chien'){
                    echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/35hHNp3" alt="Card image cap">';
                }
                else if ($produit->getType() == 'Chat'){
                    echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/35ur6qB" alt="Card image cap 2">';
                }
                else {
                    echo '<img class="card-img-top" style="width: 50%; margin:auto" src="https://bit.ly/2YsNkaM" alt="Card image cap 2">';
                }
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $produit->getNom() ?></h5>
                    <div class="card-text">
                        <p>Type: <?= $produit->getType() ?></p>
                        <p>Prix: <?= $produit->getPrix() ?> €</p>
                        <p>Stock: <?= $produit->getStock() ?> </p>

                    </div>
                    <a href="index.php?page=singleProduct&id=<?= $produit->getId() ?>" class="btn btn-primary">Voir le Produit</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="dons" style="padding-top: 80px;  padding-bottom: 80px">
    <div class="container">
        <h2 class="text-center"> Formulaire de dons</h2><br>
        <p class="text-center"> Cet argent nous servira pour prendre soin des animaux en attendant que des
            personnes bienveillantes viennent adopter un animal.</p><br>

        <form action="index.php?page=merci" method="post" class="text-center">
            Nom: <input type="text" name="nom"><br>
            Montant: <input type="number" name="montant"><br>
            <input type="hidden" value="<?= $date ?>" name="date"><br>
            <button type="submit">Donner</button>
        </form>

    </div>
</div>
</div>



<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 750px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(255,255,255,0.8);
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(150,150,150,0.8);
}

/* Caption text */
.text {
  color: black;
  background-color: rgba(255, 255, 255, 0.5);
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.dot:hover {
  background-color: #717171;
}



/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

