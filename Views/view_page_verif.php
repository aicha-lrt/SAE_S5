<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>SAE5.01 : Vérification de Connexion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="Content/sae_s3/css/accueil_site.css"/>
</head>
<body>
<div class="col">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body">
                      <div class="col">
                        <div class="authentication-login min-vh-100 bg-body row d-flex align-items-center justify-content">
                          <div class="col">
                            <h2 class="mb-3 fs-7 fw-bolder">Test ajout FAQ</h2><!-- Welcome -->
                            <form action="?controller=accueil&action=gestion_FAQ" method="post">
                              <div class="mb-3">
                                <label for="faq_description" class="form-label">Faq description</label>
                                <input type="text" class="form-control" id="faq" aria-describedby="emailHelp" name="Faq_Question" required minlength=1 maxlength=50>
                              </div>
                              <div class="mb-4">
                                <label for="faq_response" class="form-label">Faq reponse</label><!-- Password -->
                                <input type="text" class="form-control" id="faq" name="Faq_Response" required minlength=1 maxlength=200>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-4">
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" value="Ajouter"><!-- Sign In -->
                              </div>
                            </form>
                            
                          </div>
                          <p>@ 2024, Made with by ❤️ X-cape gamyu for a better web </p><!-- Sign In -->
                  </div>
                </div>
              </div>
            </div>
</body>
</html>
