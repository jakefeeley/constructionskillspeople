<?php namespace FluxedDigital\Csp\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class NvqCategories extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('FluxedDigital.Csp', 'nvq-menu-item', 'nvq-category-menu');
    }
}
