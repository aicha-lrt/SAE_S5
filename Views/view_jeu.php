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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.1.3/pixi.min.js"></script>

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
                <a class="sidebar-link active" href="#" aria-expanded="false">
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
                <a class="sidebar-link" href="?controller=recherche" aria-expanded="false">
                  <span>
                    <i class="ti ti-map-pin"></i>
                  </span>
                  <span class="hide-menu">Recherche</span>
                </a>
              </li>  
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
          <div class="row">
            <div class="col-6">
              <button
                class="btn me-1 mb-1 btn-light-success text-success btn-lg px-4 fs-4 font-medium"
                data-bs-toggle="modal"
                data-bs-target="#bs-example-modal-lg"
              >
              <i class="ti ti-file-description"></i>
              </button>
            </div>
            <div class="col">
              <form id="response-form" class="d-flex flex-row">
                <div class="">
                  <input type="text" placeholder="Entrez votre réponse" class="form-control w-100" id="response">
                </div>
                <button type="submit" class="btn btn-primary py-1 rounded-2 ms-1">Répondre</a>
              </form>
            </div>
          </div>
        

        <div
        class="modal fade"
        id="bs-example-modal-lg"
        tabindex="-1"
        aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div
              class="modal-header d-flex align-items-center">
              <h4 class="modal-title" id="myLargeModalLabel">
                Description du jeux 
              </h4>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <h5>
                Lisez attentivement 	&#x1F61C;
              </h5>
              <br>
              <p>
                Suite à la catastrophe naturelle causée principalement par
                 la croissance exponentielle du réchauffement climatique, 
                 le 24 juillet 2024, une pluie radioactive s’accompagnant 
                 d’une température de 60 °C s'abat sur le sud-ouest des 
                 Etats-Unis provoquant la mort d’une grande partie des habitants. 
                 <b>John</b>, 40 ans, père de famille et professeur au MIT et entrepreneur 
                 très connu essaie de créer en peu de temps un capteur permettant de 
                 stopper les radiations. Ayant prévenu <b>sa femme Anais</b> de se cacher dans
                  le sous sol de la maison avec ses enfants <b>Robert</b>et <b>Clara</b>, après avoir 
                  trouvé la solution pour capter les radiations. 
              </p>
              <p>
                C’est avec surprise qu’en présence de son assistance <b>Rachel</b> et de ces
                 <b>deux frères Marc</b> et <b>Ronald</b> que <b>John</b> découvre <b> sa femme</b> 
                 et <b>ses enfants</b> au sol devant la maison familial, mort non pas par les dégats 
                 causé par la pluie radioactive mais par des coups de couteau. Qui a tué 
                 <b>Anaïs</b>, <b>Robert</b> et <b>Clara</b> ?
              </p>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn text-success font-medium waves-effect text-start"
                data-bs-dismiss="modal"
              >
                Fermer
              </button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
       
        <div
          class="modal fade"
          id="al-success-alert"
          tabindex="-1"
          aria-labelledby="vertical-center-modal"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-sm">
            <div
              class="modal-content modal-filled text-success"
            >
              <div class="modal-body p-4">
                <div class="text-center text-success">
                  <i class="ti ti-circle-check fs-7"></i>
                  <h4 class="mt-2">Bravo !</h4>
                  <p class="mt-3 text-success-50">
                    La réponse est correcte.
                  </p>
                  <button
                    type="button"
                    class="btn btn-light my-2"
                    data-bs-dismiss="modal"
                  >
                    <a href="?controller=accueil">Quittez</a>
                  </button>
                </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </div>
        <div
          class="modal fade"
          id="al-danger-alert"
          tabindex="-1"
          aria-labelledby="vertical-center-modal"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-sm">
            <div
              class="modal-content modal-filled"
            >
              <div class="modal-body p-4">
                <div class="text-center text-danger">
                  <i class="ti ti-hexagon-letter-x fs-7"></i>
                  <h4 class="mt-2">Oupss!</h4>
                  <p class="mt-3">
                    La réponse est incorrecte. Veuillez réessayer.
                  </p>
                  <button
                    type="button"
                    class="btn btn-light my-2"
                    data-bs-dismiss="modal"     
                  >
                  Réessayer
                  </button>
                </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </div>
    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/libs/jquery/dist/jquery.min.js"></script>
    <script src="Content/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/js/app.min.js"></script>
    <script src="Content/js/app.init.js"></script>
    <script src="Content/js/custom.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->

    <script src="Content/js/spajeu.js"></script>
    </body>
</html>