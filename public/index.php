
<?php

require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

$title = "";
$template = "";

$context = []; // наш словарик, данные для шаблона принято называть контекстом
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

    $title = "Главная";
    $template = "main.twig";
} elseif (preg_match("#^/reyna#", $url)) {
    $template = "__object.twig";
    $title = "Рейна";
    $context['image'] = "/images/Reyna.png";

    if (preg_match("#^/reyna/image#", $url)) {
        $template = "image.twig";
    } elseif (preg_match("#^/reyna/info#", $url)) {
        $template = "reyna_info.twig";
    }
} elseif (preg_match("#^/killjoy#", $url)) {

    $title = "Киллджой";
    $template = "__object.twig";
    $context['image'] = "/images/Killjoy.png";

    if (preg_match("#^/killjoy/image#", $url)) {
        $template = "image.twig";
    } elseif (preg_match("#^/killjoy/info#", $url)) {
        $template = "killjoy_info.twig";
    }
}

if ($url == "#^/reyna#"){
    $template = "__object.twig";
    $title = "Рейна";
    $context['image'] = "/images/Reyna.png";

    if (preg_match("#^/reyna/image#", $url)){
        $template = "image.twig";
     } elseif (preg_match("#^/reyna/info#", $url)) {
        $template = "reyna_info.twig";
    }
}

if ($url == "#^/killjoy#") {
    
        $title = "Киллджой";
        $template = "__object.twig";
        $context['image'] = "/images/Killjoy.png";
    
        if (preg_match("#^/killjoy/image#", $url)) {
            $template = "image.twig";
        } elseif (preg_match("#^/killjoy/info#", $url)) {
            $template = "killjoy_info.twig";
        }
}

$context['title'] = $title;
$context['menu'] = $menu;

echo $twig->render($template, $context);
?>