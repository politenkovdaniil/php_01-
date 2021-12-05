<?php
require_once "BaseAgentTwigController.php";

class ReynaController extends BaseAgentTwigController
{
    public $title = "Рейна";
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['image_url'] = "/reyna/image";
        $context['info_url'] = "/reyna/info";

        return $context;
    }
}
