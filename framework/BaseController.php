<?php
// класс абстрактный, чтобы нельзя было создать экземпляр
abstract class BaseController
{
    public PDO $pdo; // добавил поле
    public array $params; // добавил поле

    // добавил сеттер
    public function setParams(array $params)
    {
        $this->params = $params;
    }

    public function setPDO(PDO $pdo)
    { // и сеттер для него
        $this->pdo = $pdo;
    }

    public function getContext(): array
    {
        return [];
    }

    public function process_response() {
        $method = $_SERVER['REQUEST_METHOD'];
        $context = $this->getContext(); // вызываю context тут
        if ($method == 'GET') {
            $this->get($context); // а тут просто его пробрасываю внутрь
        } else if ($method == 'POST') {
            $this->post($context); // и здесь
        }
    }
    
    // уберем тут abstract, и просто сделаем два пустых метода под get и post запросы
    public function get(array $context) {} 
    public function post(array $context) {}
}
