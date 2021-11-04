<?php
require_once "ReynaController.php";

class ReynaInfoController extends ReynaController
{
    public $template = "reyna_info.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_info'] = true;

        return $context;
    }
}
