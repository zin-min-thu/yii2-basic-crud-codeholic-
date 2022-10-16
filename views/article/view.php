<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title                   = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?=Html::encode($this->title)?></h1>

    <p class="text-muted">
        <small>Created At: <b><?=Yii::$app->formatter->asRelativeTime($model->created_at)?></b>
        By: <?=$model->createdBy->username?>
        </small>
    </p>

    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?=Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary'])?>
            <?=Html::a('Delete', ['delete', 'slug' => $model->slug], [
    'class' => 'btn btn-danger',
    'data'  => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method'  => 'post',
    ],
])?>
        </p>
    <?php endif?>

    <div>
        <?=Html::encode($model->getEncodedBody())?>
    </div>

</div>
