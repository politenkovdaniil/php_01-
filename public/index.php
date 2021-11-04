
<?php

require_once '../vendor/autoload.php';
require_once "../controllers/MainController.php";
require_once "../controllers/ReynaController.php";
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

$title = "";
$template = "";
$context = [];
$controller = null;

if ($url == "/") {
    $controller = new MainController($twig);
} elseif (preg_match("#^/reyna#", $url)) {
    $controller = new ReynaController($twig);

    if (preg_match("#^/reyna/image#", $url)) {
        $template = "image.twig";
    } elseif (preg_match("#^/reyna/info#", $url)) {
        $template = "reyna_info.twig";
    }

} elseif (preg_match("#^/killjoy#", $url)) {
    $title = "Киллджой";
    $template = "__object.twig";
    $context['image'] = "/images/Killjoy.png";
    $context['image_url'] = "/killjoy/image";
    $context['info_url'] = "/killjoy/info";

    if (preg_match("#^/killjoy/image#", $url)) {
        $template = "image.twig";
    } elseif (preg_match("#^/killjoy/info#", $url)) {
        $template = "killjoy_info.twig";
    }
}

if ($controller) {
    $controller->get();
}
?>