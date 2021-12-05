<?php
require_once "BaseAgentTwigController.php";

class Controller404 extends BaseAgentTwigController {
    public $template = "404.twig"; 
    public $title = "Страница не найдена";
    public function get()
    {
        http_response_code(404); // с помощью http_response_code устанавливаем код возврата 404
        parent::get(); // вызываем базовый метод get(), который собственно уже отрендерит страницу
    }
}