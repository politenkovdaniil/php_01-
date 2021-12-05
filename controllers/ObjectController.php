<?php

require_once "BaseAgentTwigController.php";

class ObjectController extends BaseAgentTwigController
{
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        // готовим запрос к БД, допустим вытащим запись по id=3
        // тут уже указываю конкретные поля, там более грамотно
        //$query = $this->pdo->query("SELECT description, id FROM agents_objects WHERE id=" . $this->params['id']);
        
        
        // создам запрос, под параметр создаем переменную my_id в запросе
        $query = $this->pdo->prepare("SELECT * FROM agents_objects WHERE id= :my_id");
        // подвязываем значение в my_id 
        $query->bindValue("my_id", $this->params['id']);
        $query->execute(); // выполняем запрос

        $data = $query->fetch();
        // передаем описание из БД в контекст
        $context['object'] = $data;
        $context['description'] = $data['description'];
        $context['image_url'] = '/agents_object/'.$data['id'].'/image';
        $context['info_url'] = '/agents_object/'.$data['id'].'/info';


        return $context;
    }
}
