<?php session_start(); ?>

<body style="background-color: #FBF4EB ; background-repeat: no-repeat;  background-size: cover;">


<!-- se connecter -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist" style="margin-bottom:30px; padding-top:60px;">

<li class="nav-item" role="presentation">
<a href="connexion">  
<button type="button" class="btn btn-dark" style="height: 39.352942px !important;"> Se connecter
  </button>
  </a>
  </li>

  <!-- s'inscrire -->
  <li class="nav-item" role="presentation">
  <a href="inscription">  
  <button type="button" class="btn btn-outline-dark" style="height: 39.352942px !important;"> S'inscrire 
  </button>
  </a>
  </li>
</ul>

<br>

<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form>

      
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Adresse mail</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">Mot de passe</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Se souvenir de moi </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Mot de passe oublié?</a>
        </div>
      </div>


<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist" style="margin-bottom:30px; padding-top:30px;">

<li class="nav-item" role="presentation">
<a href="home">  
<button type="button" class="btn btn-dark" style="height: 39.352942px !important;">Connexion
  </button>
  </a>
  </li>
</ul>
</body>

<br>
<br>
<br><br><br>
<br><br><br>
