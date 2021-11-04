<?php
require_once "ReynaController.php";

class ReynaImageController extends ReynaController
{
    public $template = "image.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_image']= true;
        $context['image'] = "/images/Reyna.png";

        return $context;
    }
}