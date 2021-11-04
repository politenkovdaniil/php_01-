
<?php

require_once '../vendor/autoload.php';
require_once "../controllers/MainController.php"; // добавим в самом верху ссылку на наш контроллер
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

$title = "";
$template = "";

$context = []; // наш словарик, данные для шаблона принято называть контекстом
$controller = null;
$menu = [ // добавил список словариков
    [
        "title" => "Главная",
        "url" => "/",
    ],
    [
        "title" => "Рейна",
        "url" => "/reyna",
    ],
    [
        "title" => "Киллджой",
        "url" => "/killjoy",
    ]
];

if ($url == "/") {

    $controller = new MainController($twig); // создаем экземпляр контроллера для главной страницы
    $title = "Главная";
    $template = "main.twig";
} elseif (preg_match("#^/reyna#", $url)) {

    $template = "__object.twig";
    $title = "Рейна";
    $context['image'] = "/images/Reyna.png";
    $context['image_url'] = "/reyna/image";
    $context['info_url'] = "/reyna/info";

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

$context['menu'] = $menu;

if ($controller) {
    $controller->get();
}

?>