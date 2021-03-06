<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model artsoft\media\models\Category */

$this->title = Yii::t('art/media', 'Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Media'), 'url' => ['/media/default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('art', 'Create');
?>

<div class="media-category-create">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title"><?=  Html::encode($this->title) ?></h3>            
        </div>
    </div>
    <?= $this->render('_form', compact('model')) ?>
</div>