<?php

use app\models\Article;
use yii\helpers\Html;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\models\ArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title                   = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?=Html::encode($this->title)?></h1>

   <?php if (!Yii::$app->user->isGuest): ?>
    <p>
            <?=Html::a('Create Article', ['create'], ['class' => 'btn btn-success'])?>
        </p>
   <?php endif?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=ListView::widget([
    'dataProvider' => $dataProvider,
    // 'filterModel'  => $searchModel,
    'itemView'     => '_article_item',
]);?>


</div>
