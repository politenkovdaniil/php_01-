<?php
//require_once "TwigBaseController.php";

class KilljoyController extends TwigBaseController
{
    public $title = "Киллджой";
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['image_url'] = "/killjoy/image";
        $context['info_url'] = "/killjoy/info";

        return $context;
    }
}