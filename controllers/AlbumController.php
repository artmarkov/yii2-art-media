<?php

namespace artsoft\media\controllers;

use artsoft\controllers\admin\BaseController;
use Yii;

/**
 * AlbumController implements the CRUD actions for artsoft\media\models\Album model.
 */
class AlbumController extends BaseController
{
    public $modelClass = 'artsoft\media\models\Album';
    public $modelSearchClass = 'artsoft\media\models\AlbumSearch';
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