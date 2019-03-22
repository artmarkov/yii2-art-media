<?php

namespace artsoft\media\widgets;

use artsoft\helpers\ArtHelper;
use artsoft\models\OwnerAccess;
use artsoft\models\User;
use Yii;
use yii\helpers\StringHelper;

class Gallery extends \yii\base\Widget
{
    /**
     * @var ActiveRecord
     */
    public $modelClass = 'artsoft\media\models\Media';

    /**
     * @var ActiveRecord
     */
    public $modelSearchClass = 'artsoft\media\models\MediaSearch';
    public $pageSize = 15;
    public $mode = 'normal';

    public function run()
    {
        $modelClass = $this->modelClass;
        $searchModel = $this->modelSearchClass ? new $this->modelSearchClass : null;

        $restrictAccess = (ArtHelper::isImplemented($modelClass, OwnerAccess::CLASSNAME)
            && !User::hasPermission($modelClass::getFullAccessPermission()));

        $searchName = StringHelper::basename($searchModel::className());
        $params = Yii::$app->request->getQueryParams();

        if ($restrictAccess) {
            $params[$searchName][$modelClass::getOwnerField()] = Yii::$app->user->identity->id;
        }

        $dataProvider = $searchModel->search($params);
        $dataProvider->pagination->defaultPageSize = $this->pageSize;

        return $this->render('gallery', [
                'searchModel' => $searchModel,
                'mode' => $this->mode,
                'dataProvider' => $dataProvider,
            ]
        );
    }
}