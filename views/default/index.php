<?php

use artsoft\assets\LanguagePillsAsset;
use artsoft\media\assets\ModalAsset;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = Yii::t('art/media', 'Media');
$this->params['breadcrumbs'][] = $this->title;

ModalAsset::register($this);
LanguagePillsAsset::register($this);

?>

<div class="media-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3>
            <?= Html::a(Yii::t('art/media', 'Manage Albums'), ['/media/album/index'], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
    </div>

    <?= artsoft\media\widgets\Gallery::widget() ?>

</div>

