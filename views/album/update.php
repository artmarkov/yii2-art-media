<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model artsoft\media\models\Album */

$this->title = Yii::t('art', 'Update {item}', ['item' => Yii::t('art/media', 'Album')]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Media'), 'url' => ['/media/default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Albums'), 'url' => ['/media/album/index']];
$this->params['breadcrumbs'][] = Yii::t('art', 'Update');
?>
<div class="album-update">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title"><?=  Html::encode($this->title) ?></h3>            
        </div>
    </div>
    <?= $this->render('_form', compact('model')) ?>
</div>