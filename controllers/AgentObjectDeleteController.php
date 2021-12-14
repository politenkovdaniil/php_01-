<?php

// в кой то веки наследуемся не от TwigBaseController а от BaseController
class AgentObjectDeleteController extends BaseController {
    public function post(array $context)
    {
        //$id = $_POST['id']; // взяли id
        $id = $this->params['id']; // заменил $_POST 


        $sql =<<<EOL
DELETE FROM agents_objects WHERE id = :id
EOL; // сформировали запрос
        
        // выполнили
        $query = $this->pdo->prepare($sql);

        $query->bindValue(":id", $id);
        $query->execute();

        // устанавливаем заголовок Location, на новый путь, я хочу перейти на главную страницу поэтому пишу /
        header("Location: /");
        exit; // после  header("Location: ...") надо писать exit
    }
}