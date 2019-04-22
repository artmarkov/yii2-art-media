<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = Yii::t('art/media', 'Image Settings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/media', 'Media'), 'url' => ['media/default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="media-default-settings">
    <h3><?= $this->title ?></h3>

    <div class="panel panel-danger">
        <div class="panel-heading"><?= Yii::t('art/media', 'Thumbnails settings') ?></div>
        <div class="panel-body">

            <?php if (Yii::$app->session->getFlash('successResize')) : ?>
                <div class="alert alert-success text-center">
                    <?= Yii::t('art/media', 'Thumbnails sizes has been resized successfully!') ?>
                </div>
            <?php endif; ?>

            <p><?= Yii::t('art/media', 'Current thumbnail sizes') ?>:</p>
            <ul>
                <?php foreach ($this->context->module->thumbs as $preset) : ?>
                    <li><strong><?= Yii::t('art/media', $preset['name']) ?>
                            :</strong> <?= $preset['size'][0] . ' x ' . $preset['size'][1] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p><?= Yii::t('art/media', 'If you change the thumbnails sizes, it is strongly recommended resize image thumbnails.') ?></p>
        </div>
        <div class="panel-footer">
            <?= Html::a(Yii::t('art/media', 'Do resize thumbnails'), ['/media/manage/resize'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>
</div>