<?php

$arr = scandir("img/small");
$images = array_splice($arr, 2);

include "Twig/Autoloader.php";
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem("templates");
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate("gallery.tmpl");
    echo $template->render([
        "images" => $images
    ]);
} catch (Exception $e) {
    die ("ERROR: " . $e->getMessage());
}