<?php namespace October\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Trees Back-end Controller
 */
class Trees extends Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController',
    ];

    public $listConfig = [
        'members' => 'config_members_list.yaml',
        'categories_flat' => 'config_categories_flat_list.yaml',
        'categories' => 'config_categories_list.yaml',
        'channels' => 'config_channels_list.yaml'
    ];

    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['october.test.access_plugin'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.Test', 'test', 'trees');
    }
}
