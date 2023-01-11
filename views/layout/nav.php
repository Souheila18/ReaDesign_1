<nav id="nav" class="navbar navbar-expand-lg bg-light">

    <div class="container-fluid">
        <a class="navbar-brand" href="home"><img src="assets/img/logo.png" alt="logo"
                style="height: 45px !important;"></a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">

                <li class="nav-item">

                    <a class="nav-link " aria-current="page" href="home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service">A propos</a>
                <li class="nav-item">
                </li>

                <li class="nav-item">

                    <a class="nav-link" href="shop">Boutique</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="devis">Devis</a></li>
                        <li><a class="dropdown-item" href="historique">Historique d'achat et devis</a></li>
                    </ul>
                </li>
            </ul>


            <a href="connexion">
                <button type="button" class="btn btn-outline-danger-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                        </path>
                    </svg></button></a>
            <button type="button" class="btn btn-outline-danger-dark">
            <a href="panier">
                <button type="button" class="btn btn-outline-danger-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                        <path
                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z">
                        </path>
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                        </path>
                    </svg> <span class="badge text-bg-dark" style="width: 23.600002px !important; height: 19.4px !important;">
                        <?php echo count($_SESSION["caddy"]) ?>
                    </span>
                </button>
            </a>
        </div>
    </div>
</nav>