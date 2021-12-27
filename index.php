<?php

CONST PHOTO_PATH = 'data/img';
CONST PHOTO_SMALL_PATH = 'data/img_small';

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  $loader = new Twig_Loader_Filesystem('templates');
  
  $twig = new Twig_Environment($loader);
  
  $template = $twig->loadTemplate('index.tmpl');
  
  $photos_in_dir = array_slice(scandir(PHOTO_PATH), 2);

  echo $template->render(array(
            'title' => 'Список фотографий альбома',
            'path_to_photo_small' => PHOTO_SMALL_PATH,
            'photos' => $photos_in_dir
            ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>
