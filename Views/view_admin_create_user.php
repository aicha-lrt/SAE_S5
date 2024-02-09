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
    <!--<link rel = "stylesheet" href="Content/css/test.css"/>-->
    <link  id="themeColors"  rel="stylesheet" href="Content/css/style.css" />
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
                <a class="sidebar-link active" href="?controller=chat" aria-expanded="false">
                  <span>
                    <i class="ti ti-users"></i>
                  </span>
                  <span class="hide-menu">Chat public</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?controller=recherche" aria-expanded="false">
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
          
        <h1>Créer des Utilisateurs</h1></br></br></br>
        
          <form action="?controller=admin&action=create_user" method="POST" autocomplete="off">
                              <!--<div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>-->
                              <div class="mb-4">
                                <label for="firstName" class="form-label">Prénom</label> <!-- First Name -->
                                <input type="text" class="form-control" id="firstName" name="firstName" required maxlength=50 placeholder="Ex: Jeanne D'Arc. Les lettres, chiffres, espaces, les - et ' sont acceptés">
                              </div>
                              <div class="mb-4">
                                <label for="lastName" class="form-label">Nom</label> <!-- Last Name -->
                                <input type="text" class="form-control" id="lastName" name="lastName" required maxlength=50 placeholder="Ex: Lair-Dupont. Les lettres, chiffres, espaces, les - et ' sont acceptés">
                              </div>
                              <div class="mb-4">
                                <label for="eMail" class="form-label">E-mail</label> <!-- Mail -->
                                <input type="email" class="form-control" id="eMail" name="mail" required maxlength=50 placeholder="Ex: exemple@gmail.com">
                              </div>
                              <div class="mb-4">
                                <label for="types" class="form-label">Types</label>
                                <select  class="form-control selectpicker" id="types" name="type">
                                    <option value="particulier">Particulier</option>
                                    <option value="joueur">Joueur</option>
                                    <option value="professionnel">Professionnel</option>
                                    <option value="admin">Admin</option>
                                </select> 
                                </div>
                              <div class="mb-4">
                                <label for="password1" class="form-label">Mot de passe</label> <!-- Password -->
                                <input type="password" class="form-control" id="password1" name="mdp" required minlength=6 maxlength=20 placeholder='Autorisé : Lettres majuscules et minuscules, chiffres, caractères spéciaux (*,[,],",#,$,(,),+,:,;,{,},|,~,?)'>
                              </div>
                              <div class="mb-4">
                                <label for="password2" class="form-label">Confirmation du mot de passe</label> <!-- Password Confirmation -->
                                <input type="password" class="form-control" id="password2" name="mdp_confirm" required minlength=6 maxlength=20>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-4">
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" id="submitButton" value="Créer l'Utilisateur"> <!-- Register -->
                              </div>
                              <?php 
                                if (isset($message)) { ?>
                                <p> <?=  $message ?></p>
                                <?php }
                                ?>
               </form>     
            </div>
        
          </div>
          
        </div>       
        </div>


    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/libs/jquery/dist/jquery.min.js"></script>
    <script src="Content/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="Content/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/js/formulaire.js"></script>
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

