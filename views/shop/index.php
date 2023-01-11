<body style="background-color: #FBF4EB ; background-repeat: no-repeat;  background-size: cover;">
<?php

require_once(ROOT . 'models/produit.php');
require_once(ROOT . 'models/ligne.php');

session_start();
$array = [

    //meuble//
  new produit("Chaise confort", "Meuble", 39, "assets/img/1.png", "C6573", "Un choix de mobilier élégant et moderne pour votre maison ou votre bureau. Un excellent ajout à n'importe quel espace de vie ou de travail. Elle peut apporter une touche de style et de modernité tout en offrant un confort optimal pour s'asseoir.",),

  new produit("Armoire 2 portes", "Meuble", 79, "assets/img/armoirebg.png", "P6889", "Un excellent choix pour ajouter de l'espace de rangement et de l'élégance à n'importe quelle pièce de la maison. Vous pouvez utiliser cet meuble pour ranger vos vêtements, vos accessoires de mode et tout autre objet que vous souhaitez conserver en toute sécurité et hors de vue."),

  new produit("Chaise mellotonné", "Meuble", 25, "assets/img/3.png", "M35707", "Elle apportera une touche de style et de modernité tout en offrant un confort optimal pour s'asseoir. Le molleton peut ajouter une sensation de douceur et de confort, ce qui en fait une chaise idéale pour se détendre."),

  new produit("Table ronde en bois", "Meuble", 27, "assets/img/4.png", "B52594", "Les tables rondes sont souvent considérées comme étant plus conviviales et accueillantes que les tables rectangulaires, ce qui en fait un choix populaire pour les salons, les salles à manger et les cuisines."),

  new produit("Chaise de bureau", "Meuble", 32, "assets/img/5.png", "B12330", "Le bois est un matériau durable et élégant qui peut s'intégrer à de nombreux décors différents. La couleur noire peut apporter une touche de sophistication et de modernité à votre espace de travail."),

  new produit("Chaise en velours", "Meuble", 43, "assets/img/6.png", "V54083", "Un exellent choix pour ajouter de la couleur et de la douceur à n'importe quel espace de vie ou de travail. Le velour est un tissu doux et confortable qui peut apporter une sensation de luxe et de chaleur à n'importe quelle pièce. La couleur rose peut apporter une touche de féminité et de gaieté à votre décor."),

  new produit("Fauteuil de jardin", "Meuble", 68, "assets/img/7.png", "J21580", "Conçu de manière à offrir un soutien adéquat pour le dos et les jambes, ainsi qu'un coussin moelleux pour un confort maximal. Il existe de nombreux styles de fauteuils de jardin confortables pour une personne sur le marché, y compris les fauteuils suspendus, les fauteuils inclinables et les fauteuils avec des coussins rembourrés."),

  new produit("Table d'extérieur", "Meuble", 12, "assets/img/8.png", "E76991", "Le bleu est une couleur fraîche et accueillante qui peut apporter une touche de vitalité à votre décor d'extérieur. Elles sont généralement conçues pour être durables et résistantes aux intempéries, afin de pouvoir être utilisées pendant de nombreuses années."),

    //décoration//
  new produit("Vase en céramique", "Décoration", 25, "assets/img/9.png", "C65541", "La céramique est un matériau durable et élégant qui peut s'intégrer à de nombreux décors différents. La couleur noire peut apporter une touche de modernité et de raffinement à votre décor."),

  new produit("Panier à linge", "Décoration", 17, "assets/img/11.png", "P2345","Les paniers à linge noirs sont généralement utilisés dans les chambres à coucher et les salles de bains pour ranger les vêtements et les serviettes sales avant de les mettre dans la machine à laver. Ils peuvent également être utilisés pour ranger du linge propre ou pour stocker des articles de toilette et des accessoires de salle de bain.", ""),

  new produit("Plateau décoratif", "Décoration", 14, "assets/img/12.png", "P76591"," Ils peuvent être utilisés pour présenter des aliments, tels que des fromages et des charcuteries, ou pour mettre en valeur des objets de décoration tels que des bougies ou des fleurs."),

  new produit("Miroir mural", "Décoration", 35, "assets/img/13.png", "M76661","Ils peuvent être utilisés pour ajouter de la luminosité et de l'espace visuel à une pièce, et ils peuvent également être utilisés comme élément de décoration. Les miroirs muraux peuvent être fabriqués dans une variété de matériaux, tels que le verre trempé, l'acier inoxydable ou le bois, et ils peuvent être de différentes tailles et formes. "),

  new produit("Lampe en lin", "Décoration", 28, "assets/img/14.png", "L21191","Les lampes en lin peuvent être utilisées pour ajouter de la chaleur et de la texture à une pièce, et elles peuvent être un choix élégant et naturel pour l'éclairage intérieur."),

];
$filter = [];
// Lecture d'une valeur du tableau de session

?>

<div class="row">
  <nav class="navbar navbar-expand-lg bg-light mt-5 mb-5">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Filtrer
            </a>
            <?php
            if (array_key_exists('Meuble', $_POST)) {
              $filter = filterMeuble($array);
            } else if (array_key_exists('Décoration', $_POST)) {
              $filter = filterDeco($array);
            } else {
              $filter = $array;
            }
            function filterMeuble($array)
            {
              return array_filter($array, function ($product) {
                return $product->categorie == 'Meuble';
              });

            }
            function filterDeco($array)
            {
              return array_filter($array, function ($product) {
                return $product->categorie == 'Décoration';
              });

            }

            ?>

            <form method="post">
              <ul class="dropdown-menu">
                <li><input class="dropdown-item" name="tous" type="submit" value="Tous" /></li>
                <li><input class="dropdown-item" name="Meuble" type="submit" value="Meuble" /></li>
                <li><input class="dropdown-item" name="Décoration" type="submit" value="Décoration" /></li>
              </ul>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  $count = 1;
  foreach ($filter as $key => $value) { ?>
    
    <div class="col-lg-3 mb-5 ">
      <div class="card h-100 btn btn-outline-dark mt-auto ">
        <!-- Sale badge-->
     <?php if($count<4) {       ?>

      <div class="badge bg-dark text-white position-absolute " style="top: 0.5rem; right: 0.5rem">Nouveauté</div>

     <?php } ?>

        
        <!-- Product image-->
        <img class="card-img-top" src="<?php echo $value->url; ?> " alt="3" style="width: 200px !important; height: 270px !important; margin-left:35px ">
        <!-- Product details-->
        
        <div class="card-body p-4">
          <div class="text-center">
            <span>
              <?php echo $value->categorie; ?>
            </span>
            <!-- Product name-->
            <h5 class="fw-bolder"><?php echo $value->name; ?> </h5>
            <!-- Product price-->
            <span class="text-muted text-decoration-line-through"></span>
            <?php echo $value->prix; ?> €
          </div>
        </div>
        <!-- Product actions-->
        </a>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
          </a>
          <div class="text-center">
            <a class="btn btn-outline-dark mt-auto" href="previewshop/produitDetails?name=<?php echo $value->name ?>&prix=<?php echo $value->prix; ?>&categorie=<?php echo $value->categorie; ?>&preview=<?php echo $value->preview; ?>
                                      &img=<?php echo $value->url; ?>&text=<?php echo $value->text; ?>">Voir le produit</a>
          </div>
        </div>
      </div>

    </div>

  <?php $count++ ?>
  <?php } ?>

</div>
  </body>