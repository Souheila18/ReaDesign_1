<?php session_start(); ?>
<br><br><br>

<body style="background-color: #FBF4EB ; background-repeat: no-repeat;  background-size: cover;">

<div class="row mt-5 mb-5">

  <div class="mt-2 col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
    <form action="">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" class="form-control mt-2" placeholder="Nom" required>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" class="form-control mt-2" placeholder="Prénom" required>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input type="email" class="form-control mt-2" placeholder="Email" required>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <input type="number" class="form-control mt-2" placeholder="Telephone" required>
          </div>
        </div>
        <div class="col-12 ">
          <div class="form-group">
            <textarea class="form-control mt-2 mb-2" placeholder="Message" rows="10" required></textarea>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Accepter les conditions
              </label>
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-dark" type="submit">Envoyer</button>
        </div>
      </div>
    </form>

  </div>


  <div class="mt-2 col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="mt-3">Rue de la rénovation 11,</div>
        <div>1000 BRUXELLES</div>
        <div class="mt-3">Téléphone : +32 4 88 29 49 57</div>
      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2535.0088787794784!2d4.975656415529998!3d50.5526048794896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c1a01630ab0233%3A0xa826a1c709e84669!2sRue%20de%20la%20R%C3%A9novation%2011%2C%205380%20Fernelmont!5e0!3m2!1sfr!2sbe!4v1673380726235!5m2!1sfr!2sbe"
          width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

</div>
<br><br><br>
<br><br><br>

</body>
