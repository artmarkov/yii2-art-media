<?php

namespace artsoft\media\controllers;

use artsoft\controllers\admin\BaseController;

/**
 * CategoryController implements the CRUD actions for artsoft\media\models\Category model.
 */
class CategoryController extends BaseController
{
    public $modelClass = 'artsoft\media\models\Category';
    public $modelSearchClass = 'artsoft\media\models\CategorySearch';
    public $disabledActions = ['view', 'bulk-activate', 'bulk-deactivate'];

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}