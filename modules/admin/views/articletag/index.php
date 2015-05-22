<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章标签';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content article-tag-index">

<?php  echo $this->render('../includes/_article-tabnav', ['this' => $this]); ?>
<?= Html::a('添加标签', ['articletag/create'], ['class' => 'btn btn-success'])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tagname',
            'system_set',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
