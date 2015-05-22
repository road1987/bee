<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content article-category-index">

    <?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>
    <?= Html::a('添加分类', ['articlecategory/create'], ['class' => 'btn btn-success'])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'categoryname',
            'parentid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
