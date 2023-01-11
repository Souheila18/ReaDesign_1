<?php
require_once(ROOT . 'models/ligne.php');
session_start();

if (isset($_REQUEST['addToCaddy'])) {
   add(new ligne($data['name'], $data['prix'], $data['img'], $data['preview'], $_POST["qte"]));
}
?>
<section>
   <div class="container px-4 px-lg-5 my-5">
      <div class="row gx-4 gx-lg-5 align-items-center">
         <div class="col-md-6">
            <img class="card-img-top mb-5 mb-md-0" src="<?php echo $data['img'] ?>" alt="...">
         </div>
         <div class="col-md-6">
            <div class="small mb-1">
               Numéro d'article : <?php echo $data['preview'] ?>
            </div>
            <h1 class="display-5 fw-bolder">
               <?php echo $data['name'] ?>
            </h1>
            <div class="fs-5 mb-5">
              <!-- <span class="text-decoration-line-through">
                  <?php echo $data['prix'] ?>
               </span>-->
               <span><?php echo $data['prix'] ?> €</span>
            </div>
            <p class="lead">
               <?php echo $data['text'] ?>
            </p>

            <br>

            <div class="d-flex">
               <form action="" method="POST">
                  <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" name="qte"
                     style="max-width: 3rem">
                     <br><br>

                  <input class="btn btn-outline-dark flex-shrink-0" type="submit" name="addToCaddy"
                     value="Ajouter au panier">
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
// Démarrage ou restauration de la session

function add($ligne)
{
   $_SESSION['caddy'][] = $ligne;
}

// Lecture d'une valeur du tableau de session

?>