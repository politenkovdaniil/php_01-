<?php
require_once "BaseAgentTwigController.php";// импортим TwigBaseController

class MainController extends BaseAgentTwigController {
    public $template = "main.twig";
    public $title = "Главная";

    public function getContext(): array
    {
        $context = parent::getContext();

        if(isset($_GET['type'])) {
            $query = $this->pdo->prepare("SELECT * FROM agents_objects WHERE type = :type");
            $query->bindValue("type", $_GET['type']);
            $query->execute();
        } else {
            $query = $this->pdo->query("SELECT * FROM agents_objects");
        }
        
        // стягиваем данные через fetchAll() и сохраняем результат в контекст
        $context['agents_objects'] = $query->fetchAll();

        return $context;
    }
}