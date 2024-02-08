<!Doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>X-Cape Gamyu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link  id="themeColors"  rel="stylesheet" href="Content/css/style.css" />
  </head>
  <body>
    <nav>
      <i class="ti ti-arrow-back-up  fa-2x"></i>
      <a href="?controller=accueil">Retour à la page d'accueil</a>
      <img href="/Users/oceane/Downloads/Arrow-icon-by-ahlangraphic-147-580x386.jpg">
    </nav>
    <div class="Part-one">
      <h1>FAQ</h1>
      <h3>Voici quelques réponses aux questions qui nous ont été le plus demandées</h3>
    </div>
<div class="accordion" id="accordionExample">
    <?php foreach ($Questions_Faq as $index => $faq) { ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= $index ?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="true" aria-controls="collapse<?= $index ?>">
                    <?= e($faq['Faq_Question']) ?>
                </button>
            </h2>
            <div id="collapse<?= $index ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?= $index ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?= e($faq['Faq_Response']) ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>