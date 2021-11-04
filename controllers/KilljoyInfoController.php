<?php
require_once "KilljoyController.php"; 

class KilljoyInfoController extends KilljoyController {
    public $template = "killjoy_info.twig";

    public function getContext(): array{
        $context= parent::getContext();

        $context['is_info']= true;
        
        return $context;
}
}