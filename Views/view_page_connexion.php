<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--  Title -->
    <title>X-Cape Gamyu</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="Content/img/logos/logo-complet.png" />
    
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="Content/css/style.css" />
  </head>
  <body>
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
                <img src="Content/img/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body">
                      <div class="col">
                        <div class="authentication-login min-vh-100 bg-body row d-flex align-items-center justify-content">
                          <div class="col">
                            <h2 class="mb-3 fs-7 fw-bolder">Bienvenue !</h2><!-- Welcome -->
                            <p class=" mb-9">Bienvenue à bord mon ami !</p> <!--Welcome aboard my friend -->
                            <form action="?controller=connexion&action=connexion_user" method="post" autocomplete="off">
                              <div class="mb-3">
                                <label for="eMail" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="eMail" aria-describedby="emailHelp" name="mail" required maxlength=50>
                              </div>
                              <div class="mb-4">
                                <label for="password1" class="form-label">Mot de passe</label><!-- Password -->
                                <input type="password" class="form-control" id="password1" name="mdp" required minlength=6 maxlength=20>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                  <input class="form-check-input primary" type="checkbox" id="remember" checked>
                                  <label class="form-check-label text-dark" for="remember">
                                    Se souvenir de cet appareil <!-- Remeber this Device -->
                                  </label>
                                </div>
                                <a class="text-primary fw-medium" href="#">Mot de passe oublié ?</a><!--./authentication-forgot-password.html--> <!-- Forgot Password ? -->
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-4">
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" value="Se Connecter"><!-- Sign In -->
                              </div>
                              <?php 
                                if (isset($_SESSION["message"])) { ?>
                                <p> <?=  $_SESSION["message"] ?></p>
                                <?php }
                                ?>
                              <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-medium">Si vous n’avez pas de compte, vous pouvez vous</p><!-- If you don’t have an account register You can -->
                                <a class="text-primary fw-medium ms-2" href="?controller=inscription">Inscrire ici !</a><!-- Register here! -->
                              </div>
                            </form>
                            
                          </div>
                          <p>@ 2024, Made with by ❤️ X-cape gamyu for a better web </p><!-- Sign In -->
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
    <!--  core files -->
    <script src="Content/js/custom.js"></script>
  </body>
</html>