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
                <a class="sidebar-link active" href="#" aria-expanded="false">
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
        <?php if(isset($commentaires) && isset($_SESSION["User_ID"])){?>
            <?php for($i=0;$i<count($commentaires);$i++){?>
                <div>
                    <p><img class="avatar" src="<?= $commentaires[$i]["User_Path_Avatar"]?>" alt="avatar" class="rounded-circle" width="50" height="50" />
                        <b><?php if($commentaires[$i]["User_ID"]==$_SESSION["User_ID"]){?><i><?= $commentaires[$i]["User_First_Name"]?> <?= $commentaires[$i]["User_Last_Name"]?></i> <?php } else {?><?= $commentaires[$i]["User_First_Name"]?> <?= $commentaires[$i]["User_Last_Name"]?><?php }?></b>
                        <?= affichageDate($commentaires[$i]["Message_Date"])?> : 
                        <?= $commentaires[$i]["Message_Content"]?>
                    </p>
                </div>
            <?php } ?>
                
        <?php }?>
        <form action="?controller=chat&action=ajout_message" method="POST">
            <label>Message :</label><input type="text" name="commentaire" maxlength="125" autocomplete="off" required  />
            <input type="submit" value="Envoyer" />
        </form>
            </div>
        
          </div>
          
        </div>       
        </div>



 
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/libs/jquery/dist/jquery.min.js"></script>
    <script src="Content/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="Content/js/app.min.js"></script>
    <script src="Content/js/app.init.js"></script>
    <script src="Content/js/custom.js"></script>
  </body>
</html>

