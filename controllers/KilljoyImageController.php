<?php
require_once "KilljoyController.php";

class KilljoyImageController extends KilljoyController
{
    public $template = "image.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_image']= true;
        $context['image'] = "/images/Killjoy.png";

        return $context;
    }
}