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

    // с помощью функции get будет вызывать непосредственно рендеринг
    // так как рендерить необязательно twig шаблоны, а можно, например, всякий json
    // то метод сделаем абстрактным, ну типа кто наследуем BaseController
    // тот обязан переопределить этот метод
    abstract public function get();
}