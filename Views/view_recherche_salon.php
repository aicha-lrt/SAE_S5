<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>X-Cape Gamyu</title>
    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="Content/img/logos/logo-complet.png" />
    
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    
    <link  id="themeColors"  rel="stylesheet" href="Content/css/style.css" />

    <style>

    /* Contenu de la page */
    .escapeGames-ville-en-avant {
      display: flex; 
      flex-wrap: wrap;
    }

    /* Bloc qui contiendra les informations sur le jeu */
    .salon {
      width: 22%; 
      margin-right: 3%;
      box-shadow: 0.5px 0.5px 10px 0.5px grey;
      border-top-right-radius: 1rem; 
      border-top-left-radius: 1rem;
      border-bottom-right-radius: 1rem; 
      border-bottom-left-radius: 1rem;
    }

    /* Partie haute du bloc: image + titre */
    .salon-top {
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover; 
      text-align: center; 
      color: white;
      font-weight: bold;
      font-size: 125%;
      text-shadow: 2px 2px 4px black;
      height: 7rem; 
      border-top-right-radius: 1rem; 
      border-top-left-radius: 1rem;
    }

    /* Partie basse du bloc: description, difficulté + bouton "Jouez" */
    .salon-bottom {
      height: 10rem;
      margin: 5%;
      display: flex;
      flex-direction: column;
    }

    /* Titre des jeux */
    .salon-titre {
      text-align: center;
      font-weight: bold;
      color: rgb(12, 123, 145);
    /*text-decoration: underline;*/
      font-size: 90%;
      margin-bottom: 0.5rem;
    }

    /* Difficulté */
    .niveau {
      font-weight: bold;
    }

    /* Bouton "Jouez" */
    .consulter {
      color: white;
      background-color: rgb(204, 78, 10);
      padding: 5px;
      text-align: center;
      border: none;
      border-radius: 2rem;
      width: 50%;
      margin-right: 0;
      margin-left: auto;
      margin-bottom: 0.5rem;
    }

    .consulter:hover {
      background-color: rgb(123, 48, 7);
      color: white;
    }

  .container-recherche {
    text-align: center;
    margin-top: 2rem;
    margin-bottom:30px;
  }

  .recherche {
    display: flex;
    justify-content: center;
    border: 2px solid rgb(230, 230, 230);
    border-radius: 1rem;
    margin-top: 1rem;
  }

  .search-form {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .search-escapeGame {
    display:flex;
    width: 50%;
    padding: 10px;
    box-sizing: border-box;
    background-color: rgb(244, 244, 255);
    color: grey;
    margin-right: 10px;
  }

  /** Elements du formulaire dans le selected */

  .ville {
    flex:1;
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 8px;
    border: 1px solid rgb(200, 200, 200);
  }

  /** Bouton du formulaire */

  .valider {
    color: white;
    background-color: rgb(204, 78, 10);
    padding: 10px;
    border: none;
    border-radius: 2rem;
    width: 30%;
    margin: 10px;
    width: 50%;
  }

  /** Bouton du formulaire */

  .valider:hover {
    background-color: rgb(123, 48, 7);
    color: white;
  
  }
  
  </style>
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="Content/img/logos/logo-complet.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- --------------------------------------------------- -->
    <!-- Body Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- --------------------------------------------------- -->
      <!-- Sidebar -->
      <!-- --------------------------------------------------- -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="?controller=accueil" class="text-nowrap logo-img">
              <img src="Content/img/logos/logo-complet.png" class="dark-logo" width="120" alt="" />
              <img src="Content/img/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8 text-muted"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Menu</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="?controller=accueil" aria-expanded="false">
                  <span>
                    <i class="ti ti-home"></i>
                  </span>
                  <span class="hide-menu">Accueil</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?controller=jeu" aria-expanded="false">
                  <span>
                    <i class="ti ti-device-gamepad-2"></i>
                  </span>
                  <span class="hide-menu">Escape Game</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?controller=chat" aria-expanded="false">
                  <span>
                    <i class="ti ti-users"></i>
                  </span>
                  <span class="hide-menu">Chat public</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link active" href="#" aria-expanded="false">
                  <span>
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <span class="hide-menu">Recherche</span>
                </a>
              </li>
              <!--<li class="sidebar-item">
                <a class="sidebar-link" href="./chat.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-message-dots"></i>
                  </span>
                  <span class="hide-menu">Messagerie</span>
                </a>
              </li>-->        
              <!-- ============================= -->
              <!-- Autre -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Autre</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?controller=moncompte" aria-expanded="false">
                  <span>
                    <i class="ti ti-user"></i>
                  </span>
                  <span class="hide-menu">Mon Compte</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                  <span>
                    <i class="ti ti-help-hexagon"></i>
                  </span>
                  <span class="hide-menu">Help</span>
                </a>
              </li>
                </ul>
              </li>
          </nav>          
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <!-- --------------------------------------------------- -->
      <!-- Main Wrapper -->
      <!-- --------------------------------------------------- -->
      <div class="body-wrapper">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        <header class="app-header"> 
          <nav class="navbar navbar-expand-lg navbar-light">
            <!--Burger Menu -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
            </ul>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                      <div class="d-flex align-items-center">
                        <div class="user-profile-img">
                          <img src="<?= $_SESSION["User_Path_Avatar"]?>" class="rounded-circle" width="35" height="35" alt="" />
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class="py-3 px-7 pb-0">
                          <h5 class="mb-0 fs-5 fw-semibold">Mon Profile</h5>
                        </div>
                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                          <img src="<?= $_SESSION["User_Path_Avatar"]?>" class="rounded-circle" width="80" height="80" alt="" />
                          <div class="ms-3">
                            <h5 class="mb-1 fs-3"><?= $_SESSION["User_First_Name"].' '.$_SESSION["User_Last_Name"]?></h5>
                            <p class="mb-0 d-flex text-dark align-items-center gap-2">
                              <span><?= ucfirst($_SESSION["User_Type"]) ?></span> 
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="?controller=moncompte" class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="Content/img/svgs/icon-account.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold"> Mon compte </h6>
                              <span class="d-block text-dark">Paramètres du compte</span>
                            </div>
                          </a>
                        </div>
                        <div class="d-grid py-4 px-7 pt-8">
                          <a href="?controller=connexion&action=deconnexion" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Déconnexion</a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- --------------------------------------------------- -->
        <!-- Header End -->
        <!-- --------------------------------------------------- -->
        <div class="container-fluid">
          <!-- --------------------------------------------------- -->
          <!-- Link Start -->
          <!-- --------------------------------------------------- -->
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body">
             
            </div>
          </div>
          <div class="image-container" style="left: 10%;">
            <img src="<?= $_SESSION['User_Path_Avatar'] ?>" class="rounded-circle" width="100" height="100" alt="" />
        </div>
        

  <div class="container-fluid">

<!-- --------------------------------------------------- -->
    <!-- Recherche -->
<!-- --------------------------------------------------- -->

<div class="container-recherche">
        <div class="titre">
            <h1 style="font-weight: bold; text-align: center;">Trouvez toutes les salles d'Escape Game <br><span style="color: rgb(12, 123, 145);">en France</span></h1>
        </div>

        <div class="recherche">
            <form action="?controller=recherche&action=recherche_salle_par_ville" method="post" class="search-form">
                <select name="villes" class="ville form-control" required>
                    <option disabled selected>Sélectionner une ville</option>
                    <?php if (isset($_SESSION['villes'])) {
                        foreach ($_SESSION['villes'] as $ville) { ?>
                            <option value="<?= e($ville['City_ID']) ?>">
                                <?= e($ville['City_Name']) ?>
                            </option>
                    <?php }
                    } ?>
                </select>
                <button type="submit" name="recherche_salle" class="valider btn btn-primary">Rechercher</button>
            </form>
        </div>
    </div>
  </div>
        <!-- --------------------------------------------------- -->
            <!-- Escape game ville -->
        <!-- --------------------------------------------------- -->
    
        <?php if (isset($salles) && !empty($salles)) : ?>
    <div style="margin-left: 1.5rem;">
        <?php foreach ($salles as $salle) : ?>
            <div class="escapeGames-ville-en-avant">
                <div class="salon">
                    <div class="salon-top" style="background-image: url(Content/img/themes/theme1.png);">
                        <span style="margin-top: 100%;"><br>Thème <br>Enquête</span>
                    </div>
                    <div class="salon-bottom">
                        <span class="salon-titre">Nom: <?= e($salle['Room_Escape_Name']) ?></span>
                        <span class="salon-titre">Enseigne: <?= e($salle['Room_Escape_Company']) ?></span>
                        <span class="salon-titre">Capacité: <?= e($salle['Room_Escape_Capacity']) ?> personnes</span>
                        <span class="salon-titre">Niveau: <?= e($salle['Room_Escape_Level']) ?></span>
                        <span class="salon-titre">Durée: <?= e($salle['Room_Escape_Duration']) ?> Heure</span>
                        <button class="consulter">Consulter</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  <?php endif; ?>
    <footer>
      <p>@ 2024, Made by ❤️ X-cape gamyu for a better web </p>
    </footer>


        <!-- --------------------------------------------------- -->
            <!-- Accueil End -->
        <!-- --------------------------------------------------- -->
       
 
       
    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/libs/jquery/dist/jquery.min.js"></script>
    <script src="Content/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="Content/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/js/app.min.js"></script>
    <script src="Content/js/app.init.js"></script>
    <script src="Content/js/app-style-switcher.js"></script>
    <script src="Content/js/sidebarmenu.js"></script>
    
    <script src="Content/js/custom.js"></script>
    <script src="Content/libs/prismjs/prism.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
  </body>
</html>