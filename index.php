<?php
  require_once './vendor/autoload.php';


   $loader = new \Twig\Loader\FilesystemLoader("./");
   $twig = new \Twig\Environment($loader, [
    'cache' => './cache',
    'debug' => true

  ]);
   $template=$twig->load("index.html");
   echo $template->render();



 ?>
