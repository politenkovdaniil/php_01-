<?php
require_once "BaseController.php"; // обязательно импортим BaseController

class ReynaController extends TwigBaseController
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
