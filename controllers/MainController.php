<?php
require_once "BaseAgentTwigController.php";// импортим TwigBaseController

class MainController extends BaseAgentTwigController {
    public $template = "main.twig";
    public $title = "Главная";

    public function getContext(): array
    {
        $context = parent::getContext();
        
        // подготавливаем запрос SELECT * FROM agents_objects
        // вообще звездочку не рекомендуется использовать, но на первый раз пойдет
        $query = $this->pdo->query("SELECT * FROM agents_objects");
        
        // стягиваем данные через fetchAll() и сохраняем результат в контекст
        $context['agents_objects'] = $query->fetchAll();

        return $context;
    }
}