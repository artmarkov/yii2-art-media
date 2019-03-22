<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model artsoft\media\models\Category */

$this->title = Yii::t('art/media', 'Update Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Media'), 'url' => ['/media/default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Albums'), 'url' => ['/media/album/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Categories'), 'url' => ['/media/category/index']];
$this->params['breadcrumbs'][] = Yii::t('art', 'Update');
?>
<div class="media-category-update">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', compact('model')) ?>
</div>