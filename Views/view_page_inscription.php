<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--  Title -->
    <title>X-Cape Gamyu</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="Content/img/logos/logo-complet.png" />
    
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="Content/css/style.css" />
    <link  id="themeColors"  rel="stylesheet" href="Content/css/custom.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="Content/img/logos/logo-complet.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="Content/img/logos/logo-complet.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-lg-6 col-xl-8 col-xxl-9">
              <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="Content/img/backgrounds/group.png" alt="" class="img-fluid" width="200">
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body">
                      <div class="col">
                        <div class="authentication-login min-vh-100 bg-body row d-flex align-items-center justify-content">
                          <div class="col">
                            <h2 class="mb-3 fs-7 fw-bolder">Créer un compte</h2> <!-- Create account -->
                            <p class=" mb-9">Bienvenue à bord mon ami !</p> <!-- Welcome aboard my friend -->
                            <form action="?controller=inscription&action=inscription" method="POST" autocomplete="off">
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
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" id="submitButton" value="S'inscrire"> <!-- Register -->
                              </div>
                              <?php 
                                if (isset($message)) { ?>
                                <p> <?=  $message ?></p>
                                <?php }
                                ?>
                              <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-medium">Si vous avez déjà un compte vous pouvez vous</p> <!-- If you already have an account register You can -->
                                <a class="text-primary fw-medium ms-2" href="?controller=connexion">Connecter ici !</a> <!-- Login here ! -->
                              </div>
                            </form>                       
                          </div>
                           <p>@ 2024, Made with by ❤️ X-cape gamyu for a better web </p>                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    <!--  Import Js Files -->
    <script src="Content/libs/jquery/dist/jquery.min.js"></script>
    <script src="Content/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="Content/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="Content/js/formulaire.js"></script>
    <script src="Content/js/app.min.js"></script>
    <script src="Content/js/app.init.js"></script>
    <script src="Content/js/app-style-switcher.js"></script>
    <script src="Content/js/sidebarmenu.js"></script>
    <script src="Content/js/formulaire.js"></script>
    
    <script src="Content/js/custom.js"></script>
  </body>
</html>