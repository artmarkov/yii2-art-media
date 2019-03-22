<?php

namespace artsoft\media\widgets\dashboard;

use artsoft\media\models\Media as MediaModel;
use artsoft\models\User;
use artsoft\widgets\DashboardWidget;

class Media extends DashboardWidget
{
    /**
     * Most recent post limit
     */
    public $recentLimit = 5;

    /**
     * Post index action
     */
    public $indexAction = 'media/default/index';

    public function run()
    {
        if (User::hasPermission('viewMedia')) {
            $recent = MediaModel::find()->orderBy(['id' => SORT_DESC])->limit($this->recentLimit)->all();

            return $this->render('media',
                [
                    'height' => $this->height,
                    'width' => $this->width,
                    'position' => $this->position,
                    'recent' => $recent,
                ]);
        }
    }
}