<?php

require 'class/Animal.php';
require 'class/Oiseaux/Oiseau.php';
require 'class/Felins/Felin.php';
require 'class/Marsupial/Marsupial.php';


$animaux = [
  new Felin('Chat', 'j\'aimerai bien manger mon maître'),
  new Oiseau('Pigeon', "m'oublie sur les passants", TRUE),
  new Oiseau('Pinguin', "je n'aurai bientôt plus de banquise", FALSE),
  new Marsupial('Koala', 'j\'aimerai bien grimper l\'arbe de eucalyptus', TRUE),
];

?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once('include/head.php'); ?>

<body class="bg-dark">

  <main class="vh-100">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
      <div class="alert alert-info text-center" role="alert">
        <strong>Def.</strong><?php echo Animal::definition(); ?>
      </div>
      <div class="d-flex flex-column">
        <?php foreach ($animaux as $animal) : ?>
          <div class="bg-white shadow border rounded p-5 my-1 d-flex flex-column align-items-center">
            <?php echo $animal->queFaisTu(); ?>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
    </div>
  </main>

</body>

</html>
