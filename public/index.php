
<?php

require_once '../vendor/autoload.php';
require_once "../controllers/MainController.php";
require_once "../controllers/ReynaController.php";
require_once "../controllers/ReynaImageController.php";
require_once "../controllers/ReynaInfoController.php";
require_once "../controllers/KilljoyController.php";
require_once "../controllers/KilljoyImageController.php";
require_once "../controllers/KilljoyInfoController.php";
require_once "../controllers/Controller404.php";

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader, [
    "debug" => true // добавляем тут debug режим
]);
$twig->addExtension(new \Twig\Extension\DebugExtension()); // и активируем расширение
$url = $_SERVER["REQUEST_URI"];

$title = "";
$template = "";
$context = [];
$controller = null;
$controller = new Controller404($twig);
$pdo = new PDO("mysql:host=localhost;dbname=outer_space;charset=utf8", "root", "");

if ($url == "/") {
    $controller = new MainController($twig);
} elseif (preg_match("#^/reyna/image#", $url)) { 
    $controller = new ReynaImageController($twig);
} elseif (preg_match("#^/reyna/info#", $url)) {
    $controller = new ReynaInfoController($twig);
} elseif (preg_match("#^/reyna#", $url)) {
    $controller = new ReynaController($twig);

} elseif ( preg_match("#^/killjoy/image#", $url)){
    $controller = new KilljoyImageController($twig);
} elseif ( preg_match("#^/killjoy/info#", $url)){
    $controller = new KilljoyInfoController($twig);
} elseif ( preg_match("#^/killjoy#", $url)) {
    $controller = new KilljoyController($twig);
}

if ($controller) {
    $controller->setPDO($pdo);
    $controller->get();
}
?>